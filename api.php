<?php
// Include the database configuration file.
require_once 'config.php';

/**
 * API for managing categories and technologies (with descriptions).
 *
 * Supported HTTP methods:
 * - GET: Fetch all categories with related technologies.
 * - POST: Add a new category or technology.
 * - PUT: Update an existing category or technology.
 * - DELETE: Delete a category or technology.
 */

// Set the response header to indicate JSON content type
header("Content-Type: application/json");

// Parse the HTTP method
$method = $_SERVER['REQUEST_METHOD'];

try {
    switch ($method) {
        case 'GET':
            // Fetch all categories and their technologies
            handleGet($pdo);
            break;

        case 'POST':
            // Add a new category or technology
            handlePost($pdo);
            break;

        case 'PUT':
            // Update an existing category or technology
            handlePut($pdo);
            break;

        case 'DELETE':
            // Delete a category or technology
            handleDelete($pdo);
            break;

        default:
            // Method not supported
            http_response_code(405);
            echo json_encode(['error' => 'Method Not Allowed']);
            break;
    }
} catch (Exception $e) {
    // Handle errors and return a 500 status code
    http_response_code(500);
    echo json_encode(['error' => 'Internal Server Error', 'message' => $e->getMessage()]);
}

/**
 * Handle GET requests.
 * Fetch all categories and their technologies.
 */
function handleGet($pdo) {
    $stmt = $pdo->prepare("
        SELECT 
            c.id AS category_id, 
            c.name AS category_name, 
            t.id AS technology_id, 
            t.name AS technology_name, 
            t.description AS technology_description
        FROM 
            categories c
        LEFT JOIN 
            technologies t 
        ON 
            c.id = t.category_id
    ");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $categories = [];
    foreach ($results as $row) {
        $categoryId = $row['category_id'];
        if (!isset($categories[$categoryId])) {
            $categories[$categoryId] = [
                'id' => $categoryId,
                'name' => $row['category_name'],
                'technologies' => [],
            ];
        }
        if (!empty($row['technology_id'])) {
            $categories[$categoryId]['technologies'][] = [
                'id' => $row['technology_id'],
                'name' => $row['technology_name'],
                'description' => $row['technology_description'],
            ];
        }
    }
    echo json_encode(array_values($categories), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}

/**
 * Handle POST requests.
 * Add a new category or technology.
 */
function handlePost($pdo) {
    $input = json_decode(file_get_contents('php://input'), true);
    if (isset($input['category_name'])) {
        // Add a new category
        $stmt = $pdo->prepare("INSERT INTO categories (name) VALUES (:name)");
        $stmt->bindParam(':name', $input['category_name']);
        $stmt->execute();
        http_response_code(201);
        echo json_encode(['message' => 'Category added successfully', 'id' => $pdo->lastInsertId()]);
    } elseif (isset($input['technology_name'], $input['category_id'])) {
        // Add a new technology
        $stmt = $pdo->prepare("INSERT INTO technologies (name, description, category_id) VALUES (:name, :description, :category_id)");
        $stmt->bindParam(':name', $input['technology_name']);
        $stmt->bindParam(':description', $input['description']);
        $stmt->bindParam(':category_id', $input['category_id']);
        $stmt->execute();
        http_response_code(201);
        echo json_encode(['message' => 'Technology added successfully', 'id' => $pdo->lastInsertId()]);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid input']);
    }
}

/**
 * Handle PUT requests.
 * Update an existing category or technology.
 */
function handlePut($pdo) {
    $input = json_decode(file_get_contents('php://input'), true);
    if (isset($input['category_id'], $input['category_name'])) {
        // Update a category
        $stmt = $pdo->prepare("UPDATE categories SET name = :name WHERE id = :id");
        $stmt->bindParam(':name', $input['category_name']);
        $stmt->bindParam(':id', $input['category_id']);
        $stmt->execute();
        echo json_encode(['message' => 'Category updated successfully']);
    } elseif (isset($input['technology_id'], $input['technology_name'])) {
        // Update a technology
        $stmt = $pdo->prepare("UPDATE technologies SET name = :name, description = :description WHERE id = :id");
        $stmt->bindParam(':name', $input['technology_name']);
        $stmt->bindParam(':description', $input['description']);
        $stmt->bindParam(':id', $input['technology_id']);
        $stmt->execute();
        echo json_encode(['message' => 'Technology updated successfully']);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid input']);
    }
}

/**
 * Handle DELETE requests.
 * Delete a category or technology.
 */
function handleDelete($pdo) {
    parse_str(file_get_contents('php://input'), $input);
    if (isset($input['category_id'])) {
        // Delete a category
        $stmt = $pdo->prepare("DELETE FROM categories WHERE id = :id");
        $stmt->bindParam(':id', $input['category_id']);
        $stmt->execute();
        echo json_encode(['message' => 'Category deleted successfully']);
    } elseif (isset($input['technology_id'])) {
        // Delete a technology
        $stmt = $pdo->prepare("DELETE FROM technologies WHERE id = :id");
        $stmt->bindParam(':id', $input['technology_id']);
        $stmt->execute();
        echo json_encode(['message' => 'Technology deleted successfully']);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid input']);
    }
}
?>
