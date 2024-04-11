const apiKey = "OF0hr7k3l0OhkYLhr51eV8TLhgQxjcFrAbmGSVIxPgDRW71sOaIVi2oz";
const perPage = 6;

async function fetchImages() {
    const response = await fetch(`https://api.pexels.com/v1/curated?per_page=${perPage}`, {
        headers: {
            Authorization: apiKey
        }
    });
    const data = await response.json();
    return data.photos;
}

async function displayImages() {
    const imageContainer = document.getElementById("imageContainer");
    const photos = await fetchImages();
    photos.forEach(photo => {
        const img = document.createElement("img");
        img.src = photo.src.large;
        img.alt = photo.url;
        img.style.width = "30%";
        img.style.borderRadius = "10px";
        imageContainer.appendChild(img);
    });
}

displayImages();
