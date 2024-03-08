const generateForm = document.querySelector(".generate-form");
const imageGallery = document.querySelector(".image-gallery");

const OPENAI_API_KEY = "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"; 

const handleDownloadButtonClick = (event) => {
    const imageName = event.currentTarget.getAttribute("data-image-name");
    window.location.href = `/ia/download-image/${imageName}`;
};

const updateImageCard = (imgDataArray) => {
    imgDataArray.forEach((imgObject, index) => {
        const imgCard = imageGallery.querySelectorAll(".img-card")[index];
        const imgElement = imgCard.querySelector("img");
        const downloadBtn = imgCard.querySelector(".download-btn");

        const aiGeneratedImg = `data:image/jpeg;base64,${imgObject.b64_json}`;
        imgElement.src = aiGeneratedImg;

        imgElement.onload = () => {
            imgCard.classList.remove("loading");

            // Set data-image-name attribute to the download button
            downloadBtn.setAttribute("data-image-name", `${new Date().getTime()}.jpg`);

            downloadBtn.addEventListener("click", handleDownloadButtonClick);

            downloadBtn.setAttribute("href", aiGeneratedImg);
            downloadBtn.setAttribute("download", `${new Date().getTime()}.jpg`);
        };
    });
};

const generateAiImages = async (userPrompt, userImgQuantity) => {
    try {
        const response = await fetch("https://api.openai.com/v1/images/generations", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${OPENAI_API_KEY}`
            },
            body: JSON.stringify({
                prompt: userPrompt,
                n: parseInt(userImgQuantity),
                size: "512x512",
                response_format: "b64_json"
            })
        });

        if (!response.ok) {
            throw new Error("Failed to generate images!");
        }

        const { data } = await response.json();
        updateImageCard([...data]);
        console.log(data);
    } catch (error) {
        alert(error.message);
    }
};
    const handelFormSubmission = (e) => {
        e.preventDefault();

        const userPrompt = e.srcElement[0].value;
        const userImgQuantity = e.srcElement[1].value;
        const imageName =  document.querySelector(".image-name");

        const imgCardMarkup = Array.from({length: userImgQuantity}, () =>
        `<div class="img-card">
            <img src="{{ asset('img/prof2.jpg') }}" alt="image">
            <a href="{{ path('download_image', {'imageName': '${imageName}') ~ '.jpg'}) }}" class="download-btn">
                <img src="{{ asset('img/download-icon.png') }}" alt="download icon">
            </a>
        </div>`
        ).join("");
        imageGallery.innerHTML = imgCardMarkup;
        generateAiImages(userPrompt, userImgQuantity);

    }
generateForm.addEventListener("submit", handelFormSubmission);