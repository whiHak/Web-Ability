const urlParams = new URLSearchParams(window.location.search);
const headText = urlParams.get("q");
const head = document.getElementById("head-txt");
head.innerHTML = headText;

const options = {
  method: "GET",
  headers: {
    "X-RapidAPI-Key": ApiKey,
    "X-RapidAPI-Host": "youtube-search-and-download.p.rapidapi.com",
  },
};

function createVideoCard(title, subtitle, imagePath, id) {
  const html = `
        <div class="video-content">
            <img src="${imagePath}" alt="video thumbnail" class="card-img" id=${id} />
            <div>
                <p class="title">${title}</p>
                <p class="subtitle">${subtitle} <i class="bx bxs-check-circle"></i></p>
            </div>
        </div>
    `;

  const tempDiv = document.createElement("div");
  tempDiv.innerHTML = html;

  return tempDiv;
}

const videos = document.querySelector(".video-wrapper");

const currentPage = parseInt(urlParams.get("page") || "1", 10);
const itemsPerPage = 6;
const paginationElement = document.getElementById("pagination");
const pageNumberElement = document.getElementById("pageNumber");

pageNumberElement.innerText = currentPage;

function updateVideosForPage(videosData) {
  videos.innerHTML = ""; // Clear current videos

  // Calculate start and end index for slicing the array
  const startIndex = (currentPage - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  const itemsForPage = videosData.slice(startIndex, endIndex);

  itemsForPage.forEach((video) => {
    const v = video.video;
    videos.append(
      createVideoCard(v.title, v.channelName, v.thumbnails[0].url, v.videoId)
    );
  });

  // Update pagination controls
  document.getElementById("prev").disabled = currentPage === 1;
  document.getElementById("next").disabled = endIndex >= videosData.length;

  // Add click events for pagination buttons
  document.getElementById("prev").onclick = () => changePage(-1);
  document.getElementById("next").onclick = () => changePage(1);
}

function changePage(change) {
  const newPage = currentPage + change;
  const newUrl =
    window.location.pathname + "?q=" + headText + "&page=" + newPage;
  window.location.href = newUrl;
}

fetch(
  `https://youtube-search-and-download.p.rapidapi.com/search?query=${headText}%20for%20disable%20commmunity`,
  options
)
  .then((response) => response.json())
  .then((response) => {
    updateVideosForPage(response.contents);
    const card = document.querySelectorAll(".card-img");
    card.forEach((img) => {
      img.addEventListener("click", function () {
        const src = `https://www.youtube.com/watch?v=${this.id}`;
        const nWindow = window.open(src, "_blank");
        nWindow.focus();
      });
    });
  })
  .catch((err) => console.error(err));
