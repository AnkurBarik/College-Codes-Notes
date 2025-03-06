const fs = require('fs');

function rFSE() {
  try {
    const data = fs.readFileSync('example.txt', 'utf8');
    console.log('Synchronous File Data:', data);
  } catch (err) {
    console.error('Error reading file synchronously:', err);
  }
  console.log('Synchronous File Read End');
}
function rFAE() {
  fs.readFile('example.txt', 'utf8', (err, data) => {
    if (err) {
      console.error('Error reading file asynchronously:', err);
    } else {
      console.log('Asynchronous File Data:', data);
    }
    console.log('Asynchronous File Read End');
  });
}

rFSE();
rFAE();
// Minor Changes
console.log('Code Execution Completed');