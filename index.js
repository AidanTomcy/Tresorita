const express = require("express");
const helmet = require("helmet");
const path = require("path");
require("dotenv").config();
// deepcode ignore UseCsurfForExpress: <csurf package deprecated>
const app = express();
const port = process.env.PORT;

app.disable("x-powered-by");
app.use(helmet());
app.use("/static", express.static(path.join(__dirname, "/website/public")));
app.use("/", require("./routes"));

app.listen(port, () => console.log(`Server running on port ${port}`));
