// import FruitController
// Melakukan destructing object

const { index, store } = require("./FruitsController");

const main = () => {
  index();
  store("Melon");
};

main();