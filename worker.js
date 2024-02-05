onmessage = function (event) {
  if (event.data && Array.isArray(event.data)) {
    const sortedCityNames = event.data.slice().sort();
    postMessage(sortedCityNames);
  }
};