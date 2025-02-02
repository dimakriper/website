<?php
// ...existing code...
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Электронные карты</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="На этой странице представлены источники, использованные при создании сайта.">
    <meta name="author" content="Дмитрий Кутузов, z1431">
    <link rel="icon" href="../assets/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <header>
        <h1 class="brand">
            <div>
                <svg width="150" height="150">
                    <image width="150" height="150" href="../assets/logo.svg"></image>
                </svg>
            </div>
            <div><span>Электронные карты</span></div>
        </h1>
        <h2 class="title"> HTML5 | Краткий обзор или Что такое web карты?</h2>
    </header>
    <nav>
        <hr>
        <div class="nav-links">
            <span><a href="../html4/index.html">HTML4 Страница</a></span>
            <span><a href="../html5/index.php">HTML5 Страница</a></span>
            <span><a href="../sources/index.html">Источники</a></span>
        </div>
        <hr>
    </nav>
    <main>
        <article>

            <p>
                Веб-картография — это создание интерактивных карт в интернете, которые делают географические данные
                доступными и наглядными для пользователей.
                Такие карты позволяют не только отображать информацию, но и взаимодействовать с ней,
                что делает их универсальным инструментом для анализа и визуализации пространственных данных.
            </p>
            <p>
                Сегодня веб-карты находят широкое применение в самых разных областях: от логистики и маркетинга до
                урбанистики, туризма и экологии.
                Они помогают принимать решения на основе данных, планировать маршруты, анализировать рынки и исследовать
                городские пространства.
            </p>
            <p>
                Ключевыми преимуществами веб-карт являются <strong>простота использования</strong>, оперативное
                обновление данных и возможность интеграции с другими сервисами,
                такими как геолокация или аналитические платформы.
                <em>Интерактивность</em> и удобство делают их незаменимым инструментом в современном цифровом мире.
            </p>
            <section>

                <p>
                    Способы хранения и передачи карт зависят от их типа.
                    Растровые карты обычно хранятся в формате изображений (<abbr
                        title="Portable Network Graphics">PNG</abbr>, <abbr
                        title="Joint Photographic Experts Group">JPEG</abbr>), которые делятся на тайлы для передачи
                    пользователю.
                    Тайловые серверы, такие как <em>Mapbox</em> или <em>Google Maps</em>, генерируют и передают эти
                    данные
                    по запросу.
                    Векторные карты хранятся в форматах, таких как <abbr title="Geographic JSON">GeoJSON</abbr> или
                    <abbr title="Protocol Buffers">PBF</abbr>,
                    что позволяет уменьшить объем передаваемых данных и повысить производительность.
                    Передача данных осуществляется через <abbr title="Application Programming Interface">API</abbr> или
                    стандартизированные протоколы.
                </p>
                <figure class="article-image">
                    <img src="../assets/pic1.jpg" alt="Растровые карты">
                    <figcaption>Растровые карты</figcaption>
                </figure>
                <figure class="article-image">
                    <img src="../assets/pic3.png" alt="Векторные карты">
                    <figcaption>Векторные карты</figcaption>
                </figure>
            </section>
            <p>
                Разработка веб-карт базируется на современных технологиях, включая JavaScript-библиотеки,
                а также API картографических сервисов,
                например Google Maps API.
                Эти инструменты позволяют создавать адаптивные, функциональные и привлекательные карты для решения самых
                разнообразных задач.
            </p>

            <section id="stack">

                <h3>Стек работы с электронными картами</h3>
                <details open>
                    <summary>GIS-системы</summary>
                    <ol>
                        <li><dfn>QGIS</dfn> (Quantum GIS) – открытая система для создания и анализа пространственных
                            данных.</li>
                        <li><dfn>ArcGIS Server</dfn> – мощная коммерческая система для управления геоданными и картами.
                        </li>
                    </ol>
                    <input type="text" placeholder="Enter list item">
                    <button onclick="addListItem(this)">Add Item</button>
                </details>
                <details open>
                    <summary>Базы данных с пространственной поддержкой</summary>
                    <ol>
                        <li><dfn>PostGIS</dfn> – расширение для PostgreSQL для работы с географическими данными.</li>
                        <li><dfn>SpatiaLite</dfn> – расширение для SQLite, предоставляющее возможности для работы с
                            пространственными данными.</li>
                    </ol>
                    <input type="text" placeholder="Enter list item">
                    <button onclick="addListItem(this)">Add Item</button>
                </details>
                <details>
                    <summary>Тайловые серверы</summary>
                    <ol>
                        <li><dfn>Mapnik</dfn> – библиотека для рендеринга карт в различных форматах.</li>
                        <li><dfn>TileStache</dfn> – сервер для обслуживания картографических тайлов.</li>
                    </ol>
                    <input type="text" placeholder="Enter list item">
                    <button onclick="addListItem(this)">Add Item</button>
                </details>
                <details>
                    <summary>Стандарты</summary>
                    <ol>
                        <li><dfn><abbr title="Web Map Service">WMS</abbr></dfn> – стандарт для предоставления растровых
                            карт через интернет.</li>
                        <li><dfn><abbr title="Web Feature Service">WFS</abbr></dfn> – стандарт для предоставления
                            векторных данных и возможности их редактирования.</li>
                        <li><dfn><abbr title="Web Map Tile Service">WMTS</abbr></dfn> – стандарт для передачи карт,
                            разделённых на тайлы.</li>
                    </ol>
                    <input type="text" placeholder="Enter list item">
                    <button onclick="addListItem(this)">Add Item</button>
                </details>
                <details>
                    <summary>Фронтенд библиотеки для работы с веб-картами</summary>
                    <ol>
                        <li><dfn>Leaflet</dfn> – легковесная JavaScript-библиотека для отображения карт.</li>
                        <li><dfn>OpenLayers</dfn> – более мощная библиотека для работы с картами и географическими
                            данными.</li>
                        <li><dfn>Mapbox GL JS</dfn> – библиотека для отображения векторных карт с использованием WebGL
                            для создания более динамичных и интерактивных карт.</li>
                        <li><dfn>CesiumJS</dfn> – библиотека для работы с 3D-картами и визуализацией пространственных
                            данных в реальном времени.</li>
                    </ol>
                    <input type="text" placeholder="Enter list item">
                    <button onclick="addListItem(this)">Add Item</button>
                </details>
            </section>
        </article>

        <section class="pyramid">
            <h3 style="width: fit-content">Таблица масштабов <q>Пирамиды тайлов</q></h3>
            <table border="1" id="pyramidTable"
                style="width: 1000px; background: repeating-linear-gradient(45deg, #b2ddf0, #f0f0f0 10px, #fff 10px, #fff 20px);">
                <thead>
                    <tr>
                        <th>Zoom Level (Z)</th>
                        <th>Размер области (км × км)</th>
                        <th>Количество тайлов (на стороне)</th>
                        <th>Масштаб (приблизительно)</th>
                        <th>Размер пикселя (м/пиксель)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0</td>
                        <td>40,075 × 40,075</td>
                        <td>1 × 1</td>
                        <td>1:500,000,000</td>
                        <td>~156,412</td>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>20,037 × 20,037</td>
                        <td>2 × 2</td>
                        <td>1:250,000,000</td>
                        <td>~78,206</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>10,019 × 10,019</td>
                        <td>4 × 4</td>
                        <td>1:150,000,000</td>
                        <td>~39,103</td>
                    </tr>
                    <tr>
                        <td>n</td>
                        <td> --- </td>
                        <td>2n × 2n</td>
                        <td colspan="2">
                            <figure class="clearfix">
                                <img style="width: 100%" src="../assets/pic2.jpg" alt="Пирамида тайлов">
                                <figcaption>Пирамида тайлов</figcaption>
                            </figure>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>5,009 × 5,009</td>
                        <td>8 × 8</td>
                        <td>1:70,000,000</td>
                        <td>~19,551</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2,505 × 2,505</td>
                        <td>16 × 16</td>
                        <td>1:35,000,000</td>
                        <td>~9,776</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>1,252 × 1,252</td>
                        <td>32 × 32</td>
                        <td>1:15,000,000</td>
                        <td>~4,888</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>626 × 626</td>
                        <td>64 × 64</td>
                        <td>1:8,000,000</td>
                        <td>~2,444</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>313 × 313</td>
                        <td>128 × 128</td>
                        <td>1:4,000,000</td>
                        <td>~1,222</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>156 × 156</td>
                        <td>256 × 256</td>
                        <td>1:2,000,000</td>
                        <td>~610</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>78 × 78</td>
                        <td>512 × 512</td>
                        <td>1:1,000,000</td>
                        <td>~305</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>39 × 39</td>
                        <td>1,024 × 1,024</td>
                        <td>1:500,000</td>
                        <td>~152</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>19 × 19</td>
                        <td>2,048 × 2,048</td>
                        <td>1:250,000</td>
                        <td>~76</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>9.8 × 9.8</td>
                        <td>4,096 × 4,096</td>
                        <td>1:150,000</td>
                        <td>~38</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>4.9 × 4.9</td>
                        <td>8,192 × 8,192</td>
                        <td>1:70,000</td>
                        <td>~19</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>2.4 × 2.4</td>
                        <td>16,384 × 16,384</td>
                        <td>1:35,000</td>
                        <td>~9</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>1.2 × 1.2</td>
                        <td>32,768 × 32,768</td>
                        <td>1:15,000</td>
                        <td>~4.8</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>0.6 × 0.6</td>
                        <td>65,536 × 65,536</td>
                        <td>1:8,000</td>
                        <td>~2.4</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>0.3 × 0.3</td>
                        <td>131,072 × 131,072</td>
                        <td>1:4,000</td>
                        <td>~1.2</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>0.15 × 0.15</td>
                        <td>262,144 × 262,144</td>
                        <td>1:2,000</td>
                        <td>~0.6</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="zoomLevel" value="0"></td>
                        <td><input type="text" id="areaSize" value="40,075 × 40,075"></td>
                        <td><input type="text" id="tileCount" value="1 × 1"></td>
                        <td><input type="text" id="scale" value="1:500,000,000"></td>
                        <td><input type="text" id="pixelSize" value="~156,412"></td>
                        <td style="text-align: center;">
                            <button onclick="addRow()">Add Row</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <div id="clock" style="font-size: 20px; margin-top: 20px;"></div>
        <script>
            const colck = document.getElementById('clock');
            clock.addEventListener('mouseover', function() {
                this.style.backgroundColor = 'yellow';
                this.style.fontSize = '25px';
            });
    
            clock.addEventListener('mouseout', function() {
                this.style.backgroundColor = '';
                this.style.fontSize = '20px';
            });
            clock.addEventListener('click', function() {
                alert('Автор: Дмитрий Кутузов, z1431');
            });

            </script>
        </main>
        
    <footer>
        <hr>
        <div class="attribution">
            <p>2025 ☺ Электронные карты</p>

        </div>
    </footer>
</body>
<script>
    window.addEventListener("load", function () {
        console.log("Page fully loaded");
        // Update the clock immediately and then every second
        updateClock();
        setInterval(updateClock, 1000);
        loadStackData();
    });

    const updateClock = () => {
        const now = new Date();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const timeString = `сейчас ${hours} часов ${minutes} минут`;
        document.getElementById('clock').textContent = timeString;
    }

    function addRow() {
        const table = document.getElementById('pyramidTable').getElementsByTagName('tbody')[0];
        const lastRow = table.lastElementChild;
        const newRow = table.insertRow();

        const zoomLevel = document.getElementById('zoomLevel').value;
        const areaSize = document.getElementById('areaSize').value;
        const tileCount = document.getElementById('tileCount').value;
        const scale = document.getElementById('scale').value;
        const pixelSize = document.getElementById('pixelSize').value;

        table.insertBefore(newRow, lastRow);
        newRow.innerHTML = `
            <td contenteditable="true">${zoomLevel}</td>
            <td contenteditable="true">${areaSize}</td>
            <td contenteditable="true">${tileCount}</td>
            <td contenteditable="true">${scale}</td>
            <td contenteditable="true">${pixelSize}</td>
            <td>
                <button onclick="deleteRow(this)">Delete</button>
            </td>
        `;
    }

    function deleteRow(button) {
        const row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }

    function addListItem(button) {
        const input = button.previousElementSibling;
        const list = button.previousElementSibling.previousElementSibling;
        const newItem = document.createElement('li');
        newItem.textContent = input.value;
        newItem.innerHTML += ' <button onclick="removeListItem(this)">Remove</button>';
        list.appendChild(newItem);
        input.value = '';
    }

    function removeListItem(button) {
        const item = button.parentNode;
        item.parentNode.removeChild(item);
    }

    function loadStackData() {
        fetch('/website/api.php')
            .then(response => response.json())
            .then(data => {
                const stackSection = document.getElementById('stack');
                stackSection.innerHTML = ''; // Clear existing content
                data.forEach(category => {
                    const details = document.createElement('details');
                    details.open = true;
                    const summary = document.createElement('summary');
                    summary.textContent = category.name;
                    details.appendChild(summary);

                    const ol = document.createElement('ol');
                    category.technologies.forEach(tech => {
                        const li = document.createElement('li');
                        li.innerHTML = `<dfn>${tech.name}</dfn> - ${tech.description || ''} 
                                        <button onclick="editTechnology(${tech.id}, '${tech.name}', '${tech.description}', this)">Edit</button>
                                        <button onclick="removeTechnology(${tech.id}, this)">Remove</button>`;
                        ol.appendChild(li);
                    });

                    const input = document.createElement('input');
                    input.type = 'text';
                    input.placeholder = 'Enter technology name';
                    const button = document.createElement('button');
                    button.textContent = 'Add Item';
                    button.onclick = () => addTechnology(category.id, input.value, details);

                    details.appendChild(ol);
                    details.appendChild(input);
                    details.appendChild(button);
                    stackSection.appendChild(details);
                });
            });
    }

    function addTechnology(categoryId, name, detailsElement) {
        const description = prompt('Enter description:');
        if (!description) return;

        fetch('/website/api.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ technology_name: name, description: description, category_id: categoryId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.id) {
                const ol = detailsElement.querySelector('ol');
                const li = document.createElement('li');
                li.innerHTML = `<dfn>${name}</dfn> - ${description} 
                                <button onclick="editTechnology(${data.id}, '${name}', '${description}', this)">Edit</button>
                                <button onclick="removeTechnology(${data.id}, this)">Remove</button>`;
                ol.appendChild(li);
            } else {
                alert('Error adding technology');
            }
        });
    }

    function removeTechnology(id, button) {
        fetch('/website/api.php', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `technology_id=${id}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                const li = button.parentElement;
                li.parentElement.removeChild(li);
            } else {
                alert('Error removing technology');
            }
        });
    }

    function editTechnology(id, name, description, button) {
        const newName = prompt('Enter new name:', name);
        const newDescription = prompt('Enter new description:', description);
        if (!newName || !newDescription) return;

        fetch('/website/api.php', {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ technology_id: id, technology_name: newName, description: newDescription })
        })
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                const li = button.parentElement;
                li.innerHTML = `<dfn>${newName}</dfn> - ${newDescription} 
                                <button onclick="editTechnology(${id}, '${newName}', '${newDescription}', this)">Edit</button>
                                <button onclick="removeTechnology(${id}, this)">Remove</button>`;
                alert('Technology updated successfully');
            } else {
                alert('Error updating technology');
            }
        });
    }

    function updateTechnology(id, name, description) {
        fetch('/website/api.php', {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ technology_id: id, technology_name: name, description: description })
        })
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                alert('Technology updated successfully');
            } else {
                alert('Error updating technology');
            }
        });
    }

    function updateCategory(id, name) {
        fetch('/website/api.php', {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ category_id: id, category_name: name })
        })
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                alert('Category updated successfully');
            } else {
                alert('Error updating category');
            }
        });
    }
</script>
<style>
    .pyramid {
        margin-top: 60px;
        width: 100vw;

        overflow-x: scroll;
    }

    .pyramid>* {
        margin: auto;
    }

    nav {
        position: sticky;
        top: 0;
        background-color: white;
        z-index: 1000;
    }

    .article-image img {
        width: 100%;
        height: auto;
    }

    .nav-links {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .brand {
        display: flex;
        justify-content: left;
        align-items: center;
        flex-wrap: wrap;
    }

    figure {
        margin: 0 0 12px 0;
        text-align: center;
    }

    @media(min-width: 600px) {
        article {
            column-count: 2;
            column-gap: 24px;
            margin-top: 24px;
        }

        .article-image img {
            width: 100%;
            height: auto;
            max-width: 500px;
        }
    }

    @media (min-width: 955px) {
        article {
            column-count: 3;
            column-gap: 42px;
            margin-top: 36px;
        }


    }

    figure,
    #stack {
        break-inside: avoid
    }
</style>

</html>