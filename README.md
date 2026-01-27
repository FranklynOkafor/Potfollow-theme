# POTFOLLOW – WordPress Portfolio Theme

POTFOLLOW is a custom WordPress portfolio theme built to showcase projects, skills, and professional growth.  
It is designed with clean architecture, scalability, and best WordPress practices in mind.

This theme is part of my journey learning advanced WordPress theme development by building real projects instead of tutorials.

---

## ✨ Features

- Custom WordPress theme (from scratch)
- Custom Post Type for Projects (via MU-plugin)
- Project categories (taxonomy)
- Single project pages
- Project archive page
- Custom meta fields (Live URL, GitHub, Tech Stack, Status)
- Responsive header & navigation
- Clean and minimal UI
- Git version control ready

---

## 🧱 Architecture

This project follows a **separation of concerns** approach:

- **Theme** → Presentation (templates, styles, layout)
- **MU-Plugin** → Data & logic (Custom Post Types, Taxonomies, Meta Fields)

### Why MU-Plugin?
Projects should not disappear when switching themes.  
Using an MU-plugin ensures all project data remains intact regardless of the active theme.

---

## 📁 Folder Structure

```txt
potfollow/
├── assets/
│   ├── css/
│   └── js/
├── template-parts/
├── functions.php
├── header.php
├── footer.php
├── index.php
├── archive-project.php
├── single-project.php
├── style.css
└── README.md


```
## 🧩 Custom Post Type: Projects

Each project includes:

-Title
-Featured Image
-Description
-Project Category
-Live URL
-GitHub URL
-Tech Stack
-Status (Completed / Ongoing)


## 🚀 Installation

Clone the repository into:

wp-content/themes/


Activate POTFOLLOW from WordPress Admin

Ensure the MU-plugin is present in:

wp-content/mu-plugins/


Re-save permalinks:

Settings → Permalinks → Save Changes


## 🛠️ Tech Stack

-WordPress (Classic Theme)

-PHP

-HTML

-CSS

-JavaScript

-Git & GitHub

## 📌 Status

This project is actively being developed and improved as part of my WordPress learning journey.

## 👤 Author

Franklyn Okafor
Frontend & WordPress Developer
Building in public 🚀

## 📄 License

This project is open-source and available for learning and personal use.