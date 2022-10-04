const express = require("express");
const path = require("path");
const router = express.Router();

const validRoutes = ["contact", "aboutus", "charityfund", "images"];

router.get("/", (_req, res) => {
  res.status(200).sendFile(path.resolve(__dirname, "website/index.html"));
});

router.get("/:id", (_req, res) => {
  if (validRoutes.includes(_req.params.id)) {
    const fileName = path.resolve(__dirname, `website/${_req.params.id}.html`);
    res.status(200).sendFile(fileName);
  }
});

module.exports = router;
