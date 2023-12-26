import "./bootstrap";
window.axios = require("axios");

window.axios.defaults.headers.common = {
    "X-Requested-With": "XMLHttpRequest",
    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
};
