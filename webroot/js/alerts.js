var alert = {
    'initialize': function() {
        var that = this;
        $.ajax({
            'beforeSend': function(jqXhr, settings) {
                that.showIndicator();
            },
            'complete': function(jqXhr, settings) {
                that.hideIndicator();
            }
        });
        $(function() {
            that.getLocation();
            that.form();
        });
    },
    'showIndicator': function() {
        $('#indicator').show();
    },
    'hideIndicator': function() {
        $('#indicator').hide();
    },
    'getLocation': function() {
        navigator.geolocation.getCurrentPosition(function(position) {
            console.log(position);
            $('#AlertLat').val(position.coords.latitude);
            $('#AlertLon').val(position.coords.longitude);
            $('#AlertRadius').val(position.coords.accuracy);
            
        });
    },
    'form': function() {
        $('#AlertAddForm').change(function() {
            var append = ''; var theid;
            if ((theid = $('#AlertId').val()) !== '0') {
                append = '/' + theid;
            }
            $.post('postAlert' + append, $('#AlertAddForm').serialize(), function(data, textStatus) {
                if (textStatus === 'success') {
                    if (data.id !== undefined) {
                        $('#AlertId').val(data.id);
                    }
                } else {
                    alert('There was a problem. You\'re probably going to die.');
                }
            }, 'json');
        });
    }
};
alert.initialize();
