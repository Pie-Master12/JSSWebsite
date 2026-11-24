// Content body
const Body = document.body

// Sidebar stuff
const Sidebar = Body.querySelector(".Sidebar")
const Buttons = Sidebar.getElementsByClassName("DashboardButton")

// IFrame stuff
const IFrame = document.getElementsByClassName("PageContent-IFrame")[0]

for (const Button of Buttons) {
    Button.addEventListener("click", () => {
        IFrame.contentWindow.location.replace(`./dashboardsubpages/${Button.id}.php`)
        Body.querySelector(".DashboardButton-Active").className = "DashboardButton"
        Button.className = "DashboardButton-Active"
    })
}