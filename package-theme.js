const fs = require("fs");
const archiver = require("archiver");

const output = fs.createWriteStream(__dirname + "/uc1l.zip");
const archive = archiver("zip", {
  zlib: { level: 9 },
});

archive.pipe(output);
archive.glob("*.php");
archive.glob("*.png");
archive.glob("*.css");
archive.directory("dist");
archive.directory("parts");
archive.directory("templates");
archive.finalize();
