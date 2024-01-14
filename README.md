# Troubleshooting: Osiset\ShopifyApp\Exceptions\ApiException

If you encounter the error `Osiset\ShopifyApp\Exceptions\ApiException` on PHP 8.2.12 at 10.30.1, follow these steps:

1. Open the following URL in your browser to pass the shop URL:
https://admin.shopify.com/store/YOURSTORENAME/apps/YOURAPPNAME/authenticate/token?shop=YOURSTORENAME.myshopify.com




2. Install NPM and Ruby commands:
```bash
winget install RubyInstallerTeam.Ruby.3.2
winget install RubyInstallerTeam.RubyWithDevKit.3.2
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned
ridk install
Navigate to the app_extension folder under your app folder and install dependencies mentioned in package.json:


  
"dependencies": {
  "@shopify/app": "^3.52",
  "@shopify/cli": "^3.52"
}
Run:


  
npm install
Run the following command to generate the extension:


  
npm run scaffold
Shortcuts available in package.json:


  
"scripts": {
  "shopify": "shopify",
  "build": "shopify app build",
  "dev": "shopify app dev",
  "info": "shopify app info",
  "scaffold": "shopify app generate extension",
  "deploy": "shopify app deploy"
}
Press any key to login, select "NO" to connect to an existing app, choose your app, provide a configuration file name, and select "Theme App Extension."

If "Theme app extension" is grayed out, delete the extension folder from your app_extension folder.

To preview the extension, run:


  
npm run dev
Select the store name. Note the provided URLs for setup.

If changes are not reflected on localhost or live store, edit the database table faq or group store ID and save.

App Embed Block
Add new files global.css & global.js in the assets folder.

Add a new file global_script.liquid in the blocks folder with the following code:


  
{% schema %}
{
  "name": "Global Script",
  "target": "body",
  "stylesheet": "global.css",
  "javascript": "global.js",
  "settings": []
}
{% endschema %}
To add a new app embed, deploy it with the command:


  
# Run this command for deployment
npm run deploy

  
