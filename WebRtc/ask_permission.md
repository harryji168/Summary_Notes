# WebRTC, browser doesn't ask for permission to use camera and microphone - but locally it does

not using HTTPS 


5

You're not using HTTPS do you?

Remember that the newsest cool toys are only available to sites that load from secure origins. Localhost is just an exception to this.

If you think implementing HTTPS is pain in the ass or it is expensive, then take a look to Cloudlflare, $0.00 for a reverse proxy with free Comodo HTTPS certificate.

Or try this free certification authority https://letsencrypt.org/

I spoke to the guy behind this project at a securoty conference in Paris a month ago, and he explained that only thing they don't support is wildcard certificates. This should not be a problem for you. Unless you wanna have HTTPS with your own domain in your Content Delivery Network.

About browser compatibility, check this thread:

https://community.letsencrypt.org/t/which-browsers-and-operating-systems-support-lets-encrypt/4394

Share
Improve this answer
Follow

https://stackoverflow.com/questions/37545295/webrtc-browser-doesnt-ask-for-permission-to-use-camera-and-microphone-but-lo