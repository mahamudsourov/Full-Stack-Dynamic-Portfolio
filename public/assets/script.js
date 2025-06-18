console.log(document.getElementById("test").innerText);

tags = document.querySelector(".nav-links").children;
for (let i = 0; i < tags.length; i++) {
    tags[i].addEventListener('click', function (event) {
        alert(event.target.innerText);
    });
}

document.querySelectorAll(".title").forEach((abc) => {
    abc.onclick = function () {
        this.innerHTML = `
        <h3>
            <a href="#">this is by js</a>
            <p>this is a paragraph</p>
        </h3> 
        `;

        this.classList.add("card");

        avatar = document.getElementById("avatar");
        avatar.src = "https://www.simplilearn.com/ice9/free_resources_article_thumb/Artificial_Intelligence_Human_Intelligence.jpg";
        avatar.classList.add("avatar");

     
    };
});



