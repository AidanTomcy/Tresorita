const express = require("express");
const path = require("path");
const router = express.Router();

const validRoutes = ["contact", "aboutus", "charityfund", "images"];

router.get("/", (req, res) => {
  res.status(200).sendFile(path.join(__dirname, "/website/index.html"));
});

router.get("/:id", (req, res) => {
  if (validRoutes.includes(req.params.id)) {
    res
      .status(200)
      .sendFile(path.join(__dirname, `/website/${req.params.id}.html`));
  }
});

module.exports = router;
