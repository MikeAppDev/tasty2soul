export default {
    init() {
        console.log('common');
        // ici le js commun à toute les pages. Exemple : le header, le footer, une popup présente sur toutes les pages
        
    // MENU BURGER-----------------------------------------------------
    const burger = document.querySelector(".burger");
    const navMenu = document.querySelector(".nav-menu");

    burger.addEventListener("click", () => {
    burger.classList.toggle("active");
    navMenu.classList.toggle("active");
    // console.log("active menu");
    })

    document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
        burger.classList.remove("active");
        navMenu.classList.remove("active");
        // console.log("fermeture au click li");
        }))

    // NAVBAR---------------------------------------------------------
      var nav = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
          if (window.scrollY >=280) { // adjust this value based on site structure and header image height
            nav.classList.add('sticky');
            burger.classList.add('sticky');
          } else {
            nav.classList.remove('sticky');
            burger.classList.remove('sticky');
          }
        });


    // PHOTOS ----------------------------------------------------
        // Sélectionnez toutes les images dans la grille de photos
        const photos = document.querySelectorAll('.photo-grid-item img');

        // Ajoutez un écouteur d'événements click à chaque image
        photos.forEach(photo => {
        photo.addEventListener('click', () => {

            const isMobile = /Mobi/i.test(window.navigator.userAgent);
            if (isMobile) {
                return;
            }
            // Créez une nouvelle div pour afficher l'image agrandie
            const photoDiv = document.createElement('div');
            photoDiv.classList.add('photo-overlay');

            // Créez un élément <img> avec les mêmes attributs que l'image cliquée
            const newPhoto = document.createElement('img');
            newPhoto.src = photo.src;
            newPhoto.alt = photo.alt;

            // Calculez les dimensions de l'image agrandie en fonction de sa taille d'origine
            const originalWidth = photo.naturalWidth;
            const originalHeight = photo.naturalHeight;
            const windowWidth = window.innerWidth;
            const windowHeight = window.innerHeight;
            const ratio = Math.min(windowWidth / originalWidth, windowHeight / originalHeight);
            const newWidth = originalWidth * ratio;
            const newHeight = originalHeight * ratio;

            // Ajoutez les dimensions calculées à l'élément <img>
            newPhoto.style.width = `${newWidth}px`;
            newPhoto.style.height = `${newHeight}px`;

            // Ajoutez l'élément <img> à la nouvelle div
            photoDiv.appendChild(newPhoto);

            // Ajoutez la nouvelle div à la page
            document.body.appendChild(photoDiv);

            // Ajoutez un écouteur d'événements click sur la nouvelle div
            photoDiv.addEventListener('click', () => {
            // Supprimez la div de la page
            photoDiv.remove();
            });
        });
        });

    //  CANVAS --------------------------------------------------------
 // Récupérer le canvas et le contexte
 var canvas = document.getElementById("canvas");
 if (canvas) {
     var ctx = canvas.getContext("2d");


 // Définir la taille du canvas à la taille de la fenêtre
 canvas.width = window.innerWidth;
 canvas.height = window.innerHeight;

 // Constructeur de particule
 function Particle() {
     this.x = Math.random() * canvas.width;
     this.y = Math.random() * canvas.height;
     this.speed = Math.random() * 2 + 1;
     this.size = Math.random() * 75 + 5;
     this.prevX = this.x;
     this.prevY = this.y;
 }

 // Tableau pour stocker les particules
 var particles = [];

 var frameCount = 0;
 // Fonction pour mettre à jour les particules
 function update() {
     // Ajouter une nouvelle particule
     if (particles.length < 20 && frameCount % 20 === 0) {
      particles.push(new Particle());
  }

     // Mettre à jour chaque particule
     for (var i = 0; i < particles.length; i++) {
        particles[i].prevX = particles[i].x;
        particles[i].prevY = particles[i].y;
        particles[i].x += particles[i].speed;

         // Si la particule est hors de l'écran, la supprimer
         if (particles[i].x > canvas.width) {
             particles.splice(i, 1);
             i--; 
         }
         
     }
     frameCount++;
 }

 // Fonction pour dessiner les particules
 function draw() {
    
     ctx.clearRect(0, 0, canvas.width, canvas.height);

     ctx.globalAlpha = 0.1; // Définir la transparence à 50%

     for (var i = 0; i < particles.length; i++) {
         ctx.fillStyle = "white";
         ctx.beginPath();
         ctx.arc(particles[i].x, particles[i].y, particles[i].size, 0, Math.PI * 2);
         ctx.fill();
        // Ajouter un léger effet de flou
        ctx.filter = "blur(2px)";
     
    }
     requestAnimationFrame(loop);
     ctx.filter = 'none';

 }

 // Fonction pour la boucle

 var lastFrameTime = 0;
 var targetFPS = 60;

 function loop(timestamp) {
    var delta = timestamp - lastFrameTime;

    if (delta > (1000 / targetFPS)) {
        lastFrameTime = timestamp;
        update();
        draw();
    }

    requestAnimationFrame(loop);
}


    // Démarrer la boucle
    loop();
    }

    // GLIDE ---------------------------------------------------------

        // Sélectionnez tous les éléments <video> dans le carrousel
    const videos = document.querySelectorAll('.glide__slide video');

    // Ajoutez un écouteur d'événements click à chaque vidéo
    videos.forEach(video => {
    video.addEventListener('click', () => {

         // Détectez si le navigateur est utilisé sur un appareil mobile
        const isMobile = /Mobi/i.test(window.navigator.userAgent);

        if (isMobile) {
            if (video.paused) {
                video.play();
                video.controls = true;
            } else {
                video.pause();
                
            }
        } else {

        // Ajoutez la classe 'fullscreen' à la vidéo pour l'afficher en plein écran
        const videoDiv = document.createElement('div');
        videoDiv.classList.add('video-overlay');

        // Ajoutez la classe 'close-button' à l'élément <video>
        video.classList.add('close-button');
        
        // Créez un élément <span> pour la croix de fermeture
        const closeButton = document.createElement('span');
        closeButton.classList.add('close-button');
        closeButton.innerHTML = '&times;';
        
         // Créez un élément <video> avec les mêmes attributs que l'élément <video> cliqué
        const newVideo = document.createElement('video');
        newVideo.src = video.src;
        newVideo.controls = true;
        newVideo.autoplay = true;

        // Ajoutez l'élément <video> à la nouvelle div
        videoDiv.appendChild(newVideo);

        // Ajoutez la croix de fermeture à la nouvelle div
        videoDiv.appendChild(closeButton);

        // Ajoutez la nouvelle div à la page
        document.body.appendChild(videoDiv);
        
        // Ajoutez un écouteur d'événements click sur la croix de fermeture
            closeButton.addEventListener('click', (event) => {
                // Empêchez l'événement click de se propager à la div qui contient la croix de fermeture
                event.stopPropagation();
                video.classList.remove('close-button');
                // Supprimez la div de la page
                videoDiv.remove();
            });
        }});
    });
  }
  
}