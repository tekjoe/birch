// Resize Navbar on Scroll
let navigation = document.querySelector(".navigation");
let trigger = document.getElementById("observer");
let carousel = document.getElementById("carousel--top");

let observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      navigation.classList.add("scrolled");
    } else {
      navigation.classList.remove("scrolled");
    }
  });
});

observer.observe(carousel);

// Add Carousels to top and bottom of page
const config = {
  type: "carousel",
  autoplay: 5000,
  animationDuration: 500,
  hoverpause: true,
};

const sliders = document.querySelectorAll(".glide");

sliders.forEach((slider) => {
  new Glide(slider, config).mount();
});

const mymap = L.map("map", {
  center: [43.050939, -87.9067815],
  zoom: 13,
  scrollWheelZoom: false,
});

L.mapbox.accessToken =
  "pk.eyJ1IjoidGVram9lIiwiYSI6ImNrNTRmam1oMzBpd2YzZXBuNjBndDc2ZnUifQ.wjFDugqNW99oTEt_s8S7sA";

L.mapbox
  .styleLayer("mapbox://styles/tekjoe/ck558iss20d681cqeyj4u2ov6")
  .addTo(mymap);

const birchMarker = L.marker([43.050939, -87.9067815], {
  icon: L.mapbox.marker.icon({
    "marker-color": "#6A5E70",
    "marker-size": "large",
    "marker-symbol": "restaurant",
  }),
})
  .bindPopup(
    "<p>Birch</p><a href='https://g.page/birchonpleasant?share' target='_blank'>Get Directions</a>"
  )
  .addTo(mymap);

birchMarker.on("click", () => {
  birchMarker.openPopup();
});

const fiservMarker = L.marker([43.0456365, -87.9172325], {
  icon: L.mapbox.marker.icon({
    "marker-color": "#6A5E70",
    "marker-size": "medium",
    "marker-symbol": "basketball",
  }),
})
  .bindPopup(
    "<p>Fiserv Forum</p><a href='https://goo.gl/maps/4Dnyz7vwX4TmiiEQ9' target='_blank'>Get Directions</a>"
  )
  .addTo(mymap);

fiservMarker.on("click", () => {
  fiservMarker.openPopup();
});

const pabstMarker = L.marker([43.0409241, -87.9103339], {
  icon: L.mapbox.marker.icon({
    "marker-color": "#6A5E70",
    "marker-size": "medium",
    "marker-symbol": "theatre",
  }),
})
  .bindPopup(
    "<p>Pabst Theater</p><a href='https://goo.gl/maps/rTbMLvdXJ9PyxKBGA' target='_blank'>Get Directions</a>"
  )
  .addTo(mymap);

pabstMarker.on("click", () => {
  pabstMarker.openPopup();
});

const riversideMarker = L.marker([43.0387912, -87.9112458], {
  icon: L.mapbox.marker.icon({
    "marker-color": "#6A5E70",
    "marker-size": "medium",
    "marker-symbol": "theatre",
  }),
})
  .bindPopup(
    "<p>Riverside Theater</p><a href='https://goo.gl/maps/qfXzt6d1y4SPBNCS6' target='_blank'>Get Directions</a>"
  )
  .addTo(mymap);

riversideMarker.on("click", () => {
  riversideMarker.openPopup();
});

const veteransMarker = L.marker([43.0447976, -87.8894556], {
  icon: L.mapbox.marker.icon({
    "marker-color": "#6A5E70",
    "marker-size": "medium",
    "marker-symbol": "town-hall",
  }),
})
  .bindPopup(
    "<p>Veterans Park</p><a href='https://goo.gl/maps/2pJQ4D7MrLTikPM19' target='blank'>Get Directions</a>"
  )
  .addTo(mymap);

veteransMarker.on("click", () => {
  veteransMarker.openPopup();
});
