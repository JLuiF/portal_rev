/*document.addEventListener("DOMContentLoaded", function () {
    const contentDiv = document.getElementById("paginated-content");
    const pages = contentDiv.querySelectorAll(".page");
    let currentPage = 1;

    function showPage(page) {
        pages.forEach(pageElement => {
            pageElement.style.display = "none";
        });

        const pageToShow = contentDiv.querySelector(`[data-page="${page}"]`);
        if (pageToShow) {
            pageToShow.style.display = "block";
        }
    }

    // Función para cambiar de página
    function goToPage(page) {
        if (page >= 1 && page <= pages.length) {
            currentPage = page;
            showPage(currentPage);
        }
    }

    // Mostrar la página inicial
    showPage(currentPage);

    // Agregar botones de paginación
    const paginationUl = document.createElement("ul");
    paginationUl.classList.add("pagination");

    for (let i = 1; i <= pages.length; i++) {
        const li = document.createElement("li");
        li.classList.add("page-item");

        const link = document.createElement("a");
        link.classList.add("page-link");
        link.href = "#";
        link.textContent = i;

        link.addEventListener("click", function (event) {
            event.preventDefault();
            const pageNumber = parseInt(link.textContent);
            goToPage(pageNumber);
        });

        li.appendChild(link);
        paginationUl.appendChild(li);
    }

    contentDiv.appendChild(paginationUl);
});*/
document.addEventListener("DOMContentLoaded", function () {
    const contentDiv = document.getElementById("paginated-content");
    const pages = contentDiv.querySelectorAll(".page");
    let currentPage = 1;

    function showPage(page) {
        pages.forEach(pageElement => {
            pageElement.style.display = "none";
        });

        const pageToShow = contentDiv.querySelector(`[data-page="${page}"]`);
        if (pageToShow) {
            pageToShow.style.display = "block";
        }
    }

    // Función para cambiar de página
    function goToPage(page) {
        if (page >= 1 && page <= pages.length) {
            const prevPage = currentPage;
            currentPage = page;
            showPage(currentPage);
            updatePagination();
            updatePageButton(prevPage, currentPage);
        }
    }

    // Mostrar la página inicial
    showPage(currentPage);

    // Agregar botones de paginación y botones Anterior y Siguiente
    const paginationDiv = document.createElement("div");
    paginationDiv.classList.add("pagination");

    const prevButton = document.createElement("a");
    prevButton.classList.add("prev-next-button");
    prevButton.href = "#";
    prevButton.innerHTML = "&#171";

    prevButton.addEventListener("click", function (event) {
        event.preventDefault();
        if (currentPage > 1) {
            goToPage(currentPage - 1);
        }
    });

    const nextButton = document.createElement("a");
    nextButton.classList.add("prev-next-button");
    nextButton.href = "#";
    nextButton.innerHTML = "&#187";

    nextButton.addEventListener("click", function (event) {
        event.preventDefault();
        if (currentPage < pages.length) {
            goToPage(currentPage + 1);
        }
    });

    paginationDiv.appendChild(prevButton);

    for (let i = 1; i <= pages.length; i++) {
        const li = document.createElement("li");
        li.classList.add("page-item");

        const link = document.createElement("a");
        link.classList.add("page-link");
        link.href = "#";
        link.textContent = i;

        link.addEventListener("click", function (event) {
            event.preventDefault();
            const pageNumber = parseInt(link.textContent);
            goToPage(pageNumber);
        });

        li.appendChild(link);
        paginationDiv.appendChild(li);
    }

    paginationDiv.appendChild(nextButton);

    contentDiv.appendChild(paginationDiv);

    function updatePagination() {
        const pageLinks = paginationDiv.querySelectorAll(".page-link");
        pageLinks.forEach(link => link.classList.remove("active"));
        pageLinks[currentPage - 1].classList.add("active");

        if (currentPage === 1) {
            prevButton.classList.add("disabled");
        } else {
            prevButton.classList.remove("disabled");
        }

        if (currentPage === pages.length) {
            nextButton.classList.add("disabled");
        } else {
            nextButton.classList.remove("disabled");
        }
    }

    function updatePageButton(prevPage, currentPage) {
        const pageLinks = paginationDiv.querySelectorAll(".page-link");
        pageLinks[prevPage - 1].classList.remove("active");
        pageLinks[currentPage - 1].classList.add("active");
    }
});
