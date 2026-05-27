# 📣 CraftBlocks: Styled Callout & Alert Box

> A native Gutenberg block demonstrating strict "Design with Core" principles, dynamic PHP rendering, and EAA-compliant accessibility.

### 📺 Watch the Build Process
[![Watch Part 1](https://img.shields.io/badge/YouTube-Part_1:_Native_Editor_UI-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/watch?v=GPFNV7xuSPU)
[![Watch Part 2](https://img.shields.io/badge/YouTube-Part_2:_Secure_Rendering-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/watch?v=11Oar-TNjPM)

## 🏗️ Development Approach

When building this modern Gutenberg block, I avoided writing bloated custom React sidebars to ensure enterprise-level performance and security:

* **"Design with Core" (Native UI):** Instead of manually managing React state and `<InspectorControls>`, I utilized the native Block Styles API inside `block.json`. This forces WordPress to generate the color variant UI automatically, drastically reducing JavaScript payload.
* **Secure Dynamic Rendering:** The block strictly uses a `render.php` file for frontend output. All user-generated rich text is heavily sanitized using `wp_kses_post()` to prevent malicious script injections while preserving allowed formatting.
* **Accessibility (EAA-Compliance):** Replaced manual HTML construction with `get_block_wrapper_attributes()`. This allows the block to natively inject `role="note"` and `aria-label` tags, ensuring full compatibility with screen readers.
* **CSS Cascade Management:** Unified the frontend and backend styling in a single SCSS file to prevent shorthand property conflicts in the editor.

## 🛠️ Tech Stack & APIs Used

* **React / ES6+**
* **PHP 7.4+** 
* **WordPress Block API (v3)**
* **@wordpress/scripts** (Webpack / Babel)
* **SCSS / CSS**

## 🚀 Installation & Testing

1. Download the `.zip` file from the releases or clone this repository.
2. Upload to the `/wp-content/plugins/` directory of your local WordPress environment.
3. Open your terminal and navigate to the plugin folder.
4. Run `npm install` to install dependencies.
5. Run `npm run build` to compile the production-ready assets.
6. Activate the plugin through the WordPress admin dashboard and add the block to any post.

---

### 👨‍💻 About the Developer
**Moshtafizur Rahman**  
WordPress & WooCommerce Developer  

🌐 [View my full portfolio](YOUR_PORTFOLIO_LINK_HERE) | 💼 [Upwork Profile](https://upwork.com/fl/moshtafizur) | 🔗 [LinkedIn](https://linkedin.com/in/moshtafizur)