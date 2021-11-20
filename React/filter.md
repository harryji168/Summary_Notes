

https://stackoverflow.com/questions/24806772/how-to-skip-over-an-element-in-map

ust .filter() it first:

var sources = images.filter(function(img) {
  if (img.src.split('.').pop() === "json") {
    return false; // skip
  }
  return true;
}).map(function(img) { return img.src; });
If you don't want to do that, which is not unreasonable since it has some cost, you can use the more general .reduce(). You can generally express .map() in terms of .reduce:

someArray.map(function(element) {
  return transform(element);
});