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

fetch(
  `https://youtube-search-and-download.p.rapidapi.com/search?query=${headText}%20related%20with%20disability`,
  options
)
  .then((response) => response.json())
  .then((response) => {
    console.log(response);

    videos.innerHTML = "";

    response.contents.forEach((video) => {
      const v = video.video;
    //   console.log(v);
      videos.append(
        createVideoCard(v.title, v.channelName, v.thumbnails[0].url, v.videoId)
      );
    });
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
