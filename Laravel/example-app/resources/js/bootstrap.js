import axios from "axios";
import bootstarp from "bootstrap";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
