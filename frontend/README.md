# The Frontend 

The frontend for the 'WordPress Developer Assist' plugin.
For the local development you can use index.html in the public folder with 'Live Server'.
So that you don't have to refresh WP admin screens to see the update.

# Instructions 

1. Install Dependencies

```
npm install
```

2. Develop using webpack --watch

```
npm run develop
```

3. Build for production

```
npm run build
```

# References for a New Project

```
npm install --save-dev webpack webpack-cli

npm install --save-dev sass-loader sass style-loader css-loader

npm install --save-dev babel-loader @babel/core  @babel/preset-env @babel/preset-react

npm install --save react react-dom bootstrap

npx prettier --write .