<p align="center">
    <img src="./assets/icons/common/header/macma-logo.svg" height="64"/>
</p>

<h1 align="center">MACMA.pl</h1>

<p align="center">
  <strong>Promotional products and e-commerce platform</strong>
</p>

<p align="center">
  MACMA.pl is a modern online store and digital commerce platform designed for promotional products, branded merchandise, and business-oriented product configuration. The project combines a responsive storefront, catalog management, order workflow, account features, and customization tools in a single system.
</p>

## Overview

MACMA.pl was developed as a full-featured e-commerce solution for businesses and customers looking to browse, order, customize, and manage promotional products efficiently. The platform supports product discovery, negotiation, dashboard management, configurators, and content-driven marketing workflows.

## Features

- **Product catalog**: Browse and search promotional products by category and assortment.
- **Shopping cart and checkout**: Multi-step ordering flow with delivery options and threshold-based shipping logic.
- **User accounts**: Registration, login, and personalized customer dashboard.
- **Custom configurators**: Product personalization tools for branding, USB setup, shop creation, and custom presentation.
- **Pricing calculator**: Interactive pricing and offer estimation features.
- **Administration dashboard**: Access to orders, catalogs, offers, addresses, marketing content, negotiations, newsletters, API features, and data management.
- **Content publishing**: Blog, news, FAQ, and newsletter modules.
- **Support and contact tools**: Contact forms, contact management, and internal negotiation workflows.
- **Responsive design**: Optimized experience for desktop and mobile devices.

## Technologies

The project is built with a combination of modern web technologies and established frontend/backend tools:

- PHP
- HTML5
- SCSS
- Bootstrap 5.3.2
- JavaScript
- jQuery
- Bootbox.js
- Swiper.js 11.1.1
- Lightbox.js
- magnific-popup.js 1.1.0
- Select2
- MySQL (where applicable)

## Requirements

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher (if database functionality is used)
- Apache or Nginx web server
- XAMPP or equivalent local environment recommended for Windows development

### Local setup

1. Clone or download this repository.
2. Place the project folder in your local web server root directory, for example `htdocs` in XAMPP.
3. Start the web server and database services.
4. Import the required SQL schema if database support is enabled.
5. Open the application in a browser using `http://localhost/MACMA` or your local server URL.

## Usage

- **Browse catalog**: Explore featured products, categories, and special offers.
- **Place an order**: Add products to the cart, select shipping options, and proceed to checkout.
- **Manage account**: Access a dashboard for orders, preferences, and custom project data.
- **Customize products**: Use configurators for branding and promotional item setup.
- **Read content**: Review news, articles, blogs, and newsletters.

## Project structure

```text
MACMA/
├── assets/                 # Static assets (images, icons)
│   ├── icons/
│   └── img/
├── components/             # Reusable PHP components
│   ├── blog/
│   ├── branding_page/
│   ├── calculator/
│   ├── cart/
│   ├── catalogs/
│   ├── category/
│   ├── common/
│   ├── contact/
│   ├── dashboard/
│   ├── e_leaflet/
│   ├── faq/
│   ├── import_page/
│   ├── main_page/
│   ├── negotiator/
│   ├── news/
│   ├── news_article/
│   ├── newsletter/
│   ├── offertspage/
│   ├── product_card/
│   ├── register/
│   ├── shop_creator/
│   └── usb_configurator/
├── css/                    # Compiled CSS assets
├── js/                     # JavaScript libraries and application scripts
├── scss/                   # SCSS source files
├── screenshots/            # Product screenshots
├── gif/                    # Demo GIFs
├── *.php                   # Main application pages
├── LICENSE.md
├── README.md
└── assets/                # Shared project assets
```

## Live links

Main page:

- https://macma.pl/

Import page:

- https://macma.pl/import/

Catalogs:

- https://macma.pl/katalogi/

Branding:

- https://macma.pl/znakowanie/

New products:

- https://macma.pl/nowosci/

Sample category page (events):

- https://macma.pl/oferta/eventy/

About us:

- https://macma.pl/strony/o-nas/

Newsletter:

- https://macma.pl/newsletter/

News page:

- https://macma.pl/aktualnosci/

Article page:

- https://macma.pl/aktualnosci/3,techniki-znakowania-nie-musisz-byc-ekspertem/

Blog:

- https://macma.pl/blog/

Blog article page:

- https://macma.pl/blog/1,najczestsze-problemy-z-ktorymi-mierza-sie-agencje-reklamowe-podczas-zamawiania-gadzetow-promocyjnych/

FAQ:

- https://macma.pl/faq/

Contact page:

- https://macma.pl/kontakt/

Sample product page:

- https://macma.pl/940,okulary-przeciwsloneczne-uv400-ferraghini-f24003-14-5-x-15-x-5-5-cm/

404 page:

- https://macma.pl/fsdfdsfsd

Login / profile page:

- https://macma.pl/profile/

## GIF presentation

### Desktop website preview

Please wait for the GIF to load (approximately 39.7 MB).

![gif](./gif/MACMA-desktop.gif)

### Mobile website preview

Please wait for the GIF to load (approximately 15.9 MB).

<img src="./gif/MACMA-mobile.gif" width="300" alt="Mobile website preview" />

## License

Copyright © 2025. All rights reserved.

This project is the intellectual property of its author. It is not for commercial use. The author retains all copyright and ownership rights.

The following is strictly prohibited without the author's explicit written permission:

- copying the project or any part of it
- redistributing or sharing the source code
- modifying and publishing the code as your own
- using this project in any commercial, business, or profit-generating activity

This project is protected by copyright law and may not be reproduced, distributed, or used commercially without written authorization from the author.

## Architecture

![image](./screenshots/macma_architecture_image.jpg)

## Screenshots

- Desktop & mobile version :desktop_computer: :iphone:

<div align="center">

<img src="./screenshots/macma_screenshot_01.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_02.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_03.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_04.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_05.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_06.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_07.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_08.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_09.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_10.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_11.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_12.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_13.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_14.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_15.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_16.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_17.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_18.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_19.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_20.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_21.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_22.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_23.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_24.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_25.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_26.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_27.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_28.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_29.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_30.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_31.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_32.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_33.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_34.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_35.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_36.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_37.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_38.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_39.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_40.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_41.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_42.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_43.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_44.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_45.jpg" width="400" alt="screenshot" />
<img src="./screenshots/macma_screenshot_46.jpg" width="400" alt="screenshot" />

</div>
