<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Playlist</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-columns: 250px 1fr;
            grid-template-rows: auto 1fr auto;
            grid-template-areas: 
                "sidebar header"
                "sidebar main"
                "footer footer";
            min-height: 100vh;
        }

        header {
            grid-area: header;
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        main {
            grid-area: main;
            padding: 20px;
        }

        footer {
            grid-area: footer;
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        sidebar {
            grid-area: sidebar;
            background-color: #f4f4f4;
            padding: 20px;
        }

        /* Add your additional styles here */

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        form input, form select, form button {
            margin-bottom: 10px;
            padding: 10px;
        }

    </style>
</head>
<body>
    <header>
        <h1>Playlist Name</h1>
        <div>
            <a href="#">Edit Playlist</a>
            <a href="#">New Playlist</a>
        </div>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Song Title</th>
                    <th>Artist Name</th>
                    <th>Album Name</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add rows dynamically based on your data -->
                <tr>
                    <td>1</td>
                    <td>Song 1</td>
                    <td>Artist 1</td>
                    <td>Album 1</td>
                    <td>3:30</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Song 2</td>
                    <td>Artist 2</td>
                    <td>Album 2</td>
                    <td>4:15</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>

        <!-- Playlist Form -->
        <form>
            <label for="playlistName">Playlist Name</label>
            <input type="text" id="playlistName" name="playlistName">

            <label for="songSelect">Select Song</label>
            <select id="songSelect" name="songSelect">
                <option value="none">None</option>
                <!-- Add dynamically generated options based on your data -->
                <option value="song1">Song 1</option>
                <option value="song2">Song 2</option>
                <!-- Add more options as needed -->
            </select>

            <button type="button">Save</button>
        </form>
    </main>

    <footer>
        <!-- Add your footer content here, e.g., copyright, about links -->
        &copy; 2023 Your Company. All rights reserved.
    </footer>

    <aside class="sidebar">
        <!-- Add content for the sidebar, e.g., list of saved playlists -->
        <h2>Saved Playlists</h2>
        <ul>
            <li>Playlist 1</li>
            <li>Playlist 2</li>
            <!-- Add more playlist items as needed -->
        </ul>
    </aside>
</body>
</html>

