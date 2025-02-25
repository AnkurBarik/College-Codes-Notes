const fs = require('fs');
const content = 'Hello World.';
fs.writeFile('main.c', content, (err) => {
  if (err) {
    console.error('Error occured', err);
  } else {
    console.log('File has been created');
  }
});