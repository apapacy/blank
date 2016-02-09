JSONEditor.defaults.editors.image = JSONEditor.AbstractEditor.extend({
  getDefault: function() {
    return this.schema.default || '';
  },
  //sanitize: function(value) {
  //  return  value.match(/[^\\\/]+$/)[0];
  //},
  setValue: function(value, initial) {
    this.value = String(value) || initial;
    $(this.img).attr("src", '/images/uploads/' + this.value);
    this.fireSetEvent();
    return value;
  },
  getValue: function() {
    return this.value;
  },
  build: function() {
    var self = this;
    if (!this.getOption('compact', false)) {
      this.header = this.label = this.theme.getFormInputLabel(this.getTitle());
    }
    if (this.schema.description) {
      this.description = this.theme.getFormInputDescription(this.schema.description);
    }
    this.input_type = 'file';
    if (this.getOption('compact')) {
      this.container.setAttribute('class',this.container.getAttribute('class') + ' compact');
    }
    this.input = this.theme.getFormInputField(this.input_type);
    this.input.name="file";
    if (this.schema.readOnly || this.schema.readonly) {
      this.input.disabled = true;
    }

    this.input.addEventListener('change', function(e) {
      self.setValue(this.value.match(/[^\\\/]+$/)[0]);
      var xhr = new XMLHttpRequest();
      xhr.open("POST", '/admin/image/upload?filename='+encodeURIComponent(self.getValue()) , false);
      //xhr.setRequestHeader("X_FILENAME", self.getValue());
      xhr.setRequestHeader("Content-Type", 'multipart/form-data');
      xhr.send(this.files[0]);
      self.setValue(self.getValue());
    });

    this.img = document.createElement("img");
    this.img.style.height = "100px";
    this.control = this.getTheme().getFormControl(this.label, this.img, this.input, this.description);
    this.container.appendChild(this.control);
    this.value = "";
    self.theme.afterInputReady(self.input);
  },
  destroy: function() {
    if( this.label && this.label.parentNode) {
      this.label.parentNode.removeChild(this.label);
    }
    if (this.description && this.description.parentNode) {
      this.description.parentNode.removeChild(this.description);
    }
    if (this.input && this.input.parentNode) {
      this.input.parentNode.removeChild(this.input);
    }
    if (this.img && this.img.parentNode) {
      this.img.parentNode.removeChild(this.img);
    }
    this._super();
  },
  removeProperty: function(){
    this.setValue("");
    $(this.input).val("");
    $(this.img).attr("src", "")
  }

});
