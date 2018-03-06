var Form = function () {
    function Form(data) {
        _classCallCheck(this, Form);

        this.originalData = data;

        for (var field in data) {
            this[field] = data[field];
        }

        this.errors = new Errors();
    }

    _createClass(Form, [{
        key: 'data',
        value: function data() {
            var data = Object.assign({}, this);

            delete data.originalData;
            delete data.errors;

            return data;
        }
    }, {
        key: 'reset',
        value: function reset() {
            for (var field in this.originalData) {
                this[field] = '';
            }
        }
    }, {
        key: 'submit',
        value: function submit(requestType, url) {
            axios[requestType](url, this.data()).then(this.onSuccess.bind(this)).catch(this.onFail.bind(this));
        }
    }, {
        key: 'onSuccess',
        value: function onSuccess(response) {
            // temporary
            alert(response.data.message);

            try {
                successCallback();
            } catch (e) {
                console.log('Warning: No onSuccess callback function set.');
            }

            this.errors.clear();
            this.reset();
        }
    }, {
        key: 'onFail',
        value: function onFail(error) {
            // temporary
            alert(error);

            this.errors.record(error.response.data.message);
        }
    }]);

    return Form;
}();