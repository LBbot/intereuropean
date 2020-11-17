module.exports = {
    theme: {
        fontFamily: {
            body: ["Montserrat", "sans-serif"],
            fancy: ["Judson", "serif"]
        },
        extend: {
            colors: {
                "greydark": "#818383",
                "greycard": "#ACACAC",
                "greyonwhite": "#6F6F6F",
            },
            backgroundImage: theme => ({
                "liverbuilding": "url('/images/liverbuilding.png')",
                "cardpr": "url('/images/modal-megaphone.svg')",
                "cardcd": "url('/images/modal-career.png')",
                "cardlegal": "url('/images/modal-law.svg')",
                "cardof": "url('/images/modal-job.png')",
                "tile": "linear-gradient(to bottom,rgba(0,0,0,1),rgba(0,0,0,0)),url('/images/tile.png')",
                "kenny": "linear-gradient(to bottom,rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url('/images/kingkenny.png')",
            }),
            screens: {
                "xxl": "1400px",
            },
        }
    }
}
