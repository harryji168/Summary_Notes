https://developers.google.com/web/updates/2015/03/push-notifications-on-the-open-web


Implementing Push Messaging for Chrome
This section describes each step you need to complete in order to support push messaging in your web app.

Register a Service Worker
There is a dependency of having a service worker to implement push messages for the web. The reason for this is that when a push message is received, the browser can start up a service worker, which runs in the background without a page being open, and dispatch an event so that you can decide how to handle that push message.

Below is an example of how you register a service worker in your web app. When the registration has completed successfully we call initialiseState(), which we'll cover shortly.


var isPushEnabled = false;

…

window.addEventListener('load', function() {
  var pushButton = document.querySelector('.js-push-button');
  pushButton.addEventListener('click', function() {
    if (isPushEnabled) {
      unsubscribe();
    } else {
      subscribe();
    }
  });

  // Check that service workers are supported, if so, progressively
  // enhance and add push messaging support, otherwise continue without it.
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js')
    .then(initialiseState);
  } else {
    console.warn('Service workers aren\'t supported in this browser.');
  }
});