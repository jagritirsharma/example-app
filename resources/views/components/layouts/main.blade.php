<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Cool Web App" }}</title>
    <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
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
