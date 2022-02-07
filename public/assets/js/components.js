/** Event to add New Item */
$(document).on('click', 'button[data-action=addItem]', function(e) {
    e.preventDefault();
    
    var component_name = $(this).attr('data-type');

    var card = $(this).closest('div.card[data-type=componentItem]');
    var list_group = card.find('div[data-type=group]');
    var new_item_component = card.find('div[data-type=newItem]');
    var new_item = new_item_component.clone().attr('data-type', 'item').css('display', 'block');

    list_group.append(new_item);
});

/** Remove Item */
$(document).on('click', 'span[data-type=remove]', function(e) {

    e.preventDefault();
    var remove_class = $(this).attr('data-class');
    var remove_item = $(this).closest(remove_class).remove();
});

/** File upload and return uploaded file name */
$(document).on('change', 'input[type=file]', function() {

    var input = $(this).closest('.custom-file').find('input[type=hidden]');

    var formData = new FormData();
    formData.append('fileImage', $(this)[0].files[0]);

    var _token = $('input[name=_token]').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': _token
        }
    });

    $.ajax({
        url: '/dashboard/upload/file',
        type: 'POST',
        processData: false, // important
        contentType: false, // important
        dataType : 'json',
        data: formData,
        success: function(res) {
            if(res.success) {
                input.val(res.url);
            }
        }
    });
});

/** Sortable */
$('#components').sortable({
    containerSelector: 'div[data-type=componentWrap]',
    itemSelector: 'div[data-type=componentItem]',
    placeholder: '<div data-type="itemPlaceholder" class="placeholder card card-header" />'
});

$(document).on('click', 'a[data-type=sideIcon]', function(e) {
    var component = $(this).attr('data-name');
    
    $.ajax({
        method: 'GET',
        url: '/dashboard/get/component',
        data: { component: component },
        success: function(res) {
            if(res.success) {
                $('#components').append(res.html);
            }
        },
        error: function(err) {
            console.log(err);
        }
    });

    $('#componentModal').modal('hide');
});

$(document).on('click', 'button[data-action=removeSection]', function(e) {
    $(this).closest('div.card').remove();
});

$(document).on('click', 'button[data-action=addItem]', function(e) {
    
});

var components = [];

function get_component_data() {
    components = [];
    var root = $('#components');
    var items = root.find('div[data-type=componentItem]');
    items.each(function(idx, ele) {
        switch($(ele).attr('data-name')) {
            case 'heroComponent':
                var comp_data = heroBanner_components(ele);
            break;
            
            case 'iconComponent':
                var comp_data = iconSection_components(ele);
            break;

            case 'imageComponent':
                var comp_data = imageSection_components(ele);
            break;

            case 'coinsComponent':
                var comp_data = coinsSection_components(ele);
            break;

            case 'colComponent':
                var comp_data = colSection_components(ele);
            break;

            case 'roadmapComponent':
                var comp_data = roadmapSection_components(ele);
            break;

            case 'videoComponent':
                var comp_data = videoSection_components(ele);
            break;

            case 'htmlComponent':
                var comp_data = htmlSection_components(ele);
            break;

            case 'sectionComponent':
                var comp_data = customSection_components(ele);
            break;

            case 'teamComponent':
                var comp_data = teamSection_components(ele);
            break;

            case 'bannerComponent':
                var comp_data = bannerSection_components(ele);
            break;

            case 'countryComponent':
                var comp_data = countrySection_components(ele);
            break;

            case 'featuresComponent':
                var comp_data = featuresSection_components(ele);
            break;

            case 'contactForm':
                var comp_data = contactForm_components(ele);
            break;

            case 'mapComponent':
                var comp_data = mapSection_components(ele);
            break;

            default:
                // 
        }

        components.push(comp_data);
    });

    return components;
}

function heroBanner_components(ele) {

    var component_data = {
        name: 'heroComponent',
        value: []
    };
    var items = $(ele).find('.list-group-item[data-type=item]');
    items.each(function(idx, item) {

        var item_data = {
            name: 'item',
            value: []
        };

        var file_name = $(item).find('input[data-name=heroImage]').val();
        var content = $(item).find('textarea[data-name=heroContent]').val();
        var cls = $(item).find('input[data-name=itemClass]').val();
        var value = {
            image: file_name,
            content: content,
            class: cls
        };

        item_data.value.push(value);
        component_data.value.push(item_data);
    });

    return component_data;
}

function iconSection_components(ele) {
    var component_data = {
        name: 'iconComponent',
        value: []
    };
    
    var file_name = $(ele).find('input[data-name=iconImage]').val();
    var title = $(ele).find('input[data-name=title]').val();
    var cont = $(ele).find('textarea[data-name=content]').val();
    var cls = $(ele).find('input[data-name=class]').val();
    var link = $(ele).find('input[data-name=link]').val();

    var value = {
        image: file_name,
        title: title,
        content: cont,
        class: cls,
        link: link
    };

    component_data.value.push(value);
    return component_data;
}

function imageSection_components(ele) {
    var component_data = {
        name: 'imageComponent',
        value: []
    };
    var items = $(ele).find('div.file_wrap');

    items.each(function(idx, item) {
        var item_data = {
            name: 'item',
            value: []
        };
        var file_name = $(item).find('input[data-name=image]').val();
        var link = $(item).find('input[data-name=link]').val();
        var value = {
            image: file_name,
            link: link
        };
        item_data.value.push(value);
        component_data.value.push(item_data);
    });

    return component_data;
}

function coinsSection_components(ele) {
    var component_data = {
        name: 'coinsComponent',
        value: []
    };

    var items = $(ele).find('.list-group-item[data-type=item]');
    items.each(function(idx, item) {

        var item_data = {
            name: 'item',
            value: []
        };

        var file_name = $(item).find('input[data-name=coinImage]').val();
        var title = $(item).find('input[data-name=title]').val();
        var description = $(item).find('textarea[data-name=description]').val();
        var button = $(item).find('input[data-name=button]').val();
        var option = $(item).find('select[data-name=option]').val();

        var value = {
            option: option,
            image: file_name,
            title: title,
            description: description,
            button: button
        };

        item_data.value.push(value);
        component_data.value.push(item_data);
    });

    return component_data;
}

function colSection_components(ele) {
    var component_data = {
        name: 'colComponent',
        value: []
    };
    
    var file_name = $(ele).find('input[data-name=colImage]').val();
    var title = $(ele).find('input[data-name=title]').val();
    var description = $(ele).find('textarea[data-name=description]').val();
    var buttons = $(ele).find('textarea[data-name=buttons]').val();
    var style = $(ele).find('select[data-name=style]').val();
    var cls = $(ele).find('input[data-name=class]').val();
    var id = $(ele).find('input[data-name=id]').val();

    var value = {
        image: file_name,
        title: title,
        description: description,
        buttons: buttons,
        style: style,
        class: cls,
        id: id
    };

    component_data.value.push(value);
    return component_data;
}

function roadmapSection_components(ele) {
    
    var title = $(ele).find('input[data-name=title]').val();
    var description = $(ele).find('textarea[data-name=description]').val();
    var timelins = $(ele).find('textarea[data-name=timeline]');

    var component_data = {
        name: 'roadmapComponent',
        value: [
            {
                title: title,
                description: description,
                value: []
            }
        ]
    };

    timelins.each(function(idx, timeline) {
        var item_data = {
            name: 'Timeline ' + (idx + 1),
            content: $(timeline).val()
        };

        component_data.value[0].value.push(item_data);
    });

    return component_data;
}

function videoSection_components(ele) {
    var style = $(ele).find('select[data-name=style]').val();
    var component_data = {
        name: 'videoComponent',
        value: []
    }

    if(style == 1) {
        var wrap = $(ele).find('div[data-for=style1]');
        var link = $(wrap).find('input[data-name=link]').val();
        var title = $(wrap).find('input[data-name=title]').val();
        var description = $(wrap).find('textarea[data-name=description]').val();

        var style_data = {
            style: style,
            value: [
                {
                    link: link,
                    title: title,
                    description: description
                }
            ]
        };

        component_data.value.push(style_data);
    }

    if(style == 2) {
        var wrap = $(ele).find('div[data-for=style2]');
        var group = $(wrap).find('div[data-name=group]');

        var style_data = {
            style: style,
            value: []
        };

        $(group).each(function(idx, item) {
            var link = $(item).find('input[data-name=link]').val();
            var description = $(item).find('textarea[data-name=description]').val();
            var type = 0;
            if($(item).find('input[data-name=type]').prop('checked')) {
                type = 1
            }

            var item_data = {
                link: link,
                description: description,
                type: type
            };

            style_data.value.push(item_data);
        });

        component_data.value.push(style_data);
    }

    return component_data;
}

function htmlSection_components(ele) {
    var content = $(ele).find('textarea[data-name=content]').val();
    var cls = $(ele).find('input[data-name=class]').val();
    var style = $(ele).find('select[data-name="style"]').val();
    var component_data = {
        name: 'htmlComponent',
        value: [
            {
                content: content,
                class: cls,
                style: style
            }
        ]
    }

    return component_data;
}

function teamSection_components(ele) {
    var title = $(ele).find('input[data-name=title]').val();
    var group = $(ele).find('div[data-name=group]');

    var component_data = {
        name: 'teamComponent',
        value: [
            {
                title: title,
                value: []
            }
        ]
    }

    group.each(function(idx, item) {

        var image = $(item).find('input[data-name=avatarImage]').val();
        var name = $(item).find('input[data-name=name]').val();
        var bio = $(item).find('input[data-name=bio]').val();
        var description = $(item).find('textarea[data-name=description]').val();

        var value = {
            image: image,
            name: name,
            bio: bio,
            description: description
        };

        component_data.value[0].value.push(value);
    });

    return component_data;
}

function customSection_components(ele) {
    var component_data = {
        name: 'sectionComponent',
        value: []
    };

    var file_name = $(ele).find('input[data-name=colImage]').val();
    var style = $(ele).find('select[data-name=style]').val();
    var type = 0; // left
    if($(ele).find('input[data-name=type]').prop('checked')) {
        type = 1
    }
    var content = $(ele).find('textarea[data-name=content]').val();
    var cls = $(ele).find('input[data-name=class]').val();

    var value = {
        image: file_name,
        style: style,
        type: type,
        content: content,
        class: cls
    };

    component_data.value.push(value);
    return component_data;
}

function bannerSection_components(ele) {
    var component_data = {
        name: 'bannerComponent',
        value: []
    };

    var file_name = $(ele).find('input[data-name=bannerImage]').val();
    var title = $(ele).find('input[data-name=title]').val();
    var description = $(ele).find('textarea[data-name=description]').val();
    var cls = $(ele).find('input[data-name=class]').val();
    var style = $(ele).find('select[data-name=style]').val();

    var value = {
        image: file_name,
        title: title,
        style: style,
        description: description,
        class: cls
    };

    component_data.value.push(value);
    return component_data;
}

function countrySection_components(ele) {

    var title = $(ele).find('input[data-name=title]').val();
    var style = $(ele).find('select[data-name=style]').val();
    var cls = $(ele).find('input[data-name=class]').val();

    var component_data = {
        name: 'countryComponent',
        value: {
            title: title,
            style: style,
            class: cls,
            value: []
        }
    }


    var items = $(ele).find('div[data-type=item]');

    $(items).each(function(idx, item) {
        var file_name = $(item).find('input[data-name=countryImage]').val();
        var title = $(item).find('input[data-name=itemTitle]').val();
        var description = $(item).find('textarea[data-name=description]').val();

        var item_data = {
            image: file_name,
            title: title,
            description: description
        };

        component_data.value.value.push(item_data);
    });

    return component_data;
}

function featuresSection_components(ele) {
    var component_data = {
        name: 'featuresComponent',
        value: []
    }

    var items = $(ele).find('div[data-type=item]');

    $(items).each(function(idx, item) {
        var file_name = $(item).find('input[data-name=iconImage]').val();
        var title = $(item).find('input[data-name=title]').val();
        var description = $(item).find('textarea[data-name=description]').val();

        var item_data = {
            image: file_name,
            title: title,
            description: description
        };

        component_data.value.push(item_data);
    });

    return component_data;
}

function contactForm_components(ele) {
    var component_data = {
        name: 'contactForm',
        value: []
    }

    var title = $(ele).find('input[data-name=title]').val();
    var description = $(ele).find('input[data-name=description]').val();
    var address = $(ele).find('textarea[data-name=address]').val();

    var formData = {
        title: title,
        description: description,
        address: address
    };

    component_data.value.push(formData);

    return component_data;
}

function mapSection_components(ele) {
    var content = $(ele).find('textarea[data-name=content]').val();
    var cls = $(ele).find('input[data-name=class]').val();
    var component_data = {
        name: 'mapComponent',
        value: [
            {
                content: content,
                class: cls
            }
        ]
    }

    return component_data;
}