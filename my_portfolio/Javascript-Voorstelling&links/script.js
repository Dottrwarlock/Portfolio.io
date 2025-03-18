// Functie om de juiste sectie te tonen op basis van de dropdown
function showSection() {
    // Verkrijg de geselecteerde waarde uit de dropdown
    var selectedSection = document.getElementById("section-select").value;

    // Verkrijg alle secties
    var sections = document.querySelectorAll("section");

    // Verberg alle secties
    sections.forEach(function(section) {
        section.classList.remove('show');
    });

    // Toon de geselecteerde sectie als deze niet 'select' is
    if (selectedSection !== 'select') {
        document.getElementById(selectedSection).classList.add('show');
    }
}

// Gegevens voor het CV
const contactInfo = {
    name: "Jens Haneveir",
    email: "jeha.totus@outlook.com",
    phone: "+31 6 2514 5344",
    
};

const portfolio = {
    link: "https://cloudmeta.wordpress.com/homepagina/",
    description: "CloudMeta - Mijn website(sandbox), waar ik mijn projecten en blogs deel. Hier kan je ook mijn cv downloaden in PDF-formaat."
};

// Functie om de CV-gegevens bij te werken
function updateCV() {
    // Contactgegevens invullen
    document.getElementById("cv-name").textContent = contactInfo.name;
    document.getElementById("cv-address").textContent = contactInfo.address;
    document.getElementById("cv-phone").textContent = contactInfo.phone;
    document.getElementById("cv-email").textContent = contactInfo.email;

    // Portfolio-informatie toevoegen
    document.getElementById("portfolio-link").href = portfolio.link;
    document.getElementById("portfolio-description").textContent = portfolio.description;
}

// Zorg ervoor dat de eerste sectie wordt getoond bij het laden
window.onload = function() {
    updateCV(); // Bijwerken van de gegevens
    showSection(); // Toon de standaard sectie (Over Mij)
};
