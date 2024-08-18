# php/htmx custom MVC and router

This project provides a site for generating shorter URL links, QR codes, and storing statistics such as clicks and visit times.

- Routes are defined in `public/index.php`, with support for undefined routes resulting in a 404/error response.
- The response sent to the client will include an HTTP status code and a view.
- Responses can either send a partial update for HTMX swapping or render a full page linked by a template and view.
- Controllers in `app/Controller/*` extend `Response.php`, defining the response with a status code and view.
- `app/Helper.php` and `app/DB.php` handle database calls and custom functions for controllers.
- `app/path.php` defines paths to directories/folders.

<p align="center">
  <img src="https://raw.githubusercontent.com/BorisKlco/php.short-link/main/public/static/1.jpg" style="width:100%" />
</p>

<p align="center">
  <img src="https://raw.githubusercontent.com/BorisKlco/php.short-link/main/public/static/2.jpg" style="width:100%" />
</p>
