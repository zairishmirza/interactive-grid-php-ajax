# Interactive Grid using JavaScript, jQuery AJAX & PHP

An interactive Flower & Fruit Grid built using HTML, CSS, JavaScript, jQuery AJAX, and PHP sessions.

Users can interact with different grid items through single-click and double-click events. The project includes CSS animations, sound effects, and real-time click counting without requiring a MySQL database.

## Features

- Interactive flower and fruit grid.
- Single-click and double-click detection.
- Bounce animation for single clicks.
- Shake animation for double clicks.
- Sound effects using JavaScript Web Audio API.
- AJAX communication using jQuery `$.post()`.
- PHP session-based click counting.
- JSON responses from PHP.
- Displays click results without reloading the page.
- No MySQL database required.

## Technologies Used

| Technology | Purpose |
|---|---|
| HTML5 | Grid structure |
| CSS3 | Styling and animations |
| JavaScript | Click events and sound effects |
| jQuery | AJAX requests |
| AJAX | Communication between frontend and backend |
| PHP | Server-side processing |
| PHP Sessions | Temporary click-count storage |
| JSON | Sending results back to JavaScript |

## Project Structure

```text
interactive-grid-php-ajax/
│
├── grid-animated.html
├── grid-animated_response.php
└── README.md
```

## How It Works

1. The user clicks a flower or fruit in the grid.
2. JavaScript detects whether it is a single-click or double-click.
3. CSS animations and sound effects provide visual and audio feedback.
4. jQuery AJAX sends the selected item's ID and click information to PHP.
5. PHP receives the data through `$_POST`.
6. PHP sessions store and update the click counts.
7. PHP returns the results in JSON format.
8. JavaScript displays the updated results without refreshing the page.

## Requirements

- PHP-supported local server (XAMPP, WAMP, or similar).
- A modern web browser.
- Internet connection for loading the jQuery CDN.

## Installation & Usage

1. Download or clone this repository.
2. Place the project folder inside your server's web directory.

   For XAMPP, use:

   ```text
   C:\xampp\htdocs\
   ```

3. Start Apache from the XAMPP Control Panel.
4. Open your browser and visit:

   ```text
   http://localhost/interactive-grid-php-ajax/grid-animated.html
   ```

5. Click the grid items and observe the animations, sound effects, and updated click counts.

## PHP Session Information

This project uses PHP sessions instead of a database.

- `session_start()` starts or resumes a session.
- `$_SESSION` stores the click counts.
- `$_POST` receives AJAX request data.
- `json_encode()` converts PHP results into JSON.

**Note:** Click counts are temporary and associated with the PHP session. They are not permanently stored in a database.

## Learning Objectives

This project demonstrates practical use of:

- JavaScript event handling.
- Single-click and double-click detection.
- CSS keyframe animations.
- Browser audio generation.
- Asynchronous frontend-to-backend communication.
- jQuery AJAX methods.
- PHP session management.
- JSON data exchange.

## Author

**Zairish Mirza**

BSCS Undergraduate

## License

This project is available for learning and educational purposes under the MIT License.