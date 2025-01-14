var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  '/',
  '/app/Public/front/css/style.css' 
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Cache hit - return response
        if (response) {
          return response;
        }
        return fetch(event.request);
      }
    )
  );
});

// debut de serviceWorker, suffisant pour pwa (avec le manifest.json et le respect des bonnes pratiques responsive & autres)

// mettre maximum de fichier dans le cache(en priorité les images)
// voir le fonctionnement hors ligne
// voir si interessant de stoker infos bdd en cache
// continuer à developper mon js async..
