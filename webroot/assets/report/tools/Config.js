
var path = {
    "node" : "node_modules/",
    "dist" : "../dist/",
    "src" : "../src/"
};

var dist = {
    "vendor" : {
        "style" : [
            path.node + "bootstrap/scss/bootstrap.scss",
            path.node + "owl.carousel/src/scss/owl.carousel.scss",
            path.node + "font-awesome/scss/font-awesome.scss",
            path.src + "scss/style.scss",
        ],
        "script" : [
            path.node + "jquery/dist/jquery.min.js",
            path.node + "bootstrap/dist/js/bootstrap.min.js",
            path.node + "owl.carousel/src/js/owl.carousel.js"
        ],
        "img" : [
            path.node + "owl.carousel/src/img/*.*"
        ],
        "font" : [
            path.node + "font-awesome/fonts/*.*"
        ],
        "dist" : {
            "script" : path.dist + "js/",
            "style" : path.dist + "css/",
            "img" : path.dist + "imgvendor/",
            "font" : path.dist + "fonts/"
        }
    }
};

module.exports.dist = dist;