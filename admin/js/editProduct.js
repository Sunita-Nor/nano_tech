var editProduct = new Vue({
  el: "#editProduct",
  data: {
    images: [],
    productForm: {},
    productType: [],
  },
  methods: {
    addColor() {
      this.productForm.productColors.push({
        pd_color: "#00BFFF",
        pd_number: "",
      });
      this.$forceUpdate();
    },
    copyColor(pd_color, pd_number) {
      this.productForm.productColors.push({
        pd_color: pd_color,
        pd_number: pd_number,
      });
      this.$forceUpdate();
    },
    delColor(index) {
      this.productForm.productColors.splice(index, 1);
      this.$forceUpdate();
    },
    imageSelect(e) {
      let files = e.target.files;

      if (this.images.length + files.length > 5) {
        $.alert({
          icon: "fas fa-check-circle",
          title: "คำเตือน",
          content: "ไม่สามาถเพิ่มรูปภาพได้เกิน 5 รูป",
          type: "red",
          autoClose: "okay|1000",
        });
        return;
      }

      for (i = 0; i < files.length; i++) {
        this.images.push({
          img_name: files[i].name,
          url: URL.createObjectURL(files[i]),
          file: files[i],
        });
      }

      console.log("addFile", this.images);
    },
    removeImg(index) {
      this.images.splice(index, 1);
    },
    getProductData() {
      const url = location.href.replace(/\/[^\/]+?\.[^\/]+?$/, "/");
      const baseUrl = window.location.href;
      const pm_id = baseUrl.substring(baseUrl.lastIndexOf("=") + 1);
      axios
        .get(`${url}scripts/editProduct/getProductData.php?pm_id=${pm_id}`)
        .then((res) => {
          this.images = res.data.productImg;
          this.productType = res.data.productType;
          this.productForm = res.data.products[0];
          this.productForm.productColors = res.data.products.map((color) => {
            return {
              pd_color: color.pd_color,
              pd_number: color.pd_number,
            };
          });
          console.log(this.productForm);
        })
        .catch((err) => {
          console.log(err);
        });
    },
    editSubmit() {
      console.log(this.productForm);
    },
  },
  async created() {
    await this.getProductData();
  },
});
