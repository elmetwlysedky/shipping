/*

Template:  Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template
Author: potenzaglobalsolutions.com
Design and Developed by: potenzaglobalsolutions.com

<<<<<<< HEAD
NOTE: 
=======
NOTE:
>>>>>>> f00d4da9303321e3dc4ab3be7e3776dd4df9d6a1

*/

 (function($){
  "use strict";
  $(function () {
      $('#lobilist-demo').lobiList({
<<<<<<< HEAD
          
=======

>>>>>>> f00d4da9303321e3dc4ab3be7e3776dd4df9d6a1
          lists: [
        {
            title: 'TODO',
            defaultStyle: 'lobilist-info',
            items: [
                {
                    title: 'Floor cool cinders',
                    description: 'Thunder fulfilled travellers folly, wading, lake.',
                    dueDate: '2015-01-31'
                },
                {
                    title: 'Periods pride',
                    description: 'Accepted was mollis',
                    done: true
                },
                {
                    title: 'Flags better burns pigeon',
                    description: 'Rowed cloven frolic thereby, vivamus pining gown intruding strangers prank treacherously darkling.'
                },
                {
                    title: 'Accepted was mollis',
                    description: 'Rowed cloven frolic thereby, vivamus pining gown intruding strangers prank treacherously darkling.',
                    dueDate: '2015-02-02'
                }
            ]
        },
        {
            title: 'DOING',
            items: [
                {
                    title: 'Composed trays',
                    description: 'Hoary rattle exulting suspendisse elit paradises craft wistful. Bayonets allures prefer traits wrongs flushed. Tent wily matched bold polite slab coinage celerities gales beams.'
                },
                {
                    title: 'Chic leafy'
                },
                {
                    title: 'Guessed interdum armies chirp writhes most',
                    description: 'Came champlain live leopards twilight whenever warm read wish squirrel rock.',
                    dueDate: '2015-02-04',
                    done: true
                }
            ]
        }
    ]
  });
<<<<<<< HEAD
 
=======

>>>>>>> f00d4da9303321e3dc4ab3be7e3776dd4df9d6a1
 $('#lobilist-demo-02').lobiList({
    lists: [
        {
            title: 'TODO',
            defaultStyle: 'lobilist-info',
            items: [
                {
                    title: 'Floor cool cinders',
                    description: 'Thunder fulfilled travellers folly, wading, lake.',
                    dueDate: '2015-01-31'
                }
            ]
        }
    ],
    afterListAdd: function(lobilist, list){
        var $dueDateInput = list.$el.find('form [name=dueDate]');
        $dueDateInput.datepicker();
    }
   });
<<<<<<< HEAD
 
=======

>>>>>>> f00d4da9303321e3dc4ab3be7e3776dd4df9d6a1
  $('#lobilist-demo-03').lobiList({
   lists: [
        {
            title: 'TODO',
            defaultStyle: 'lobilist-info',
            controls: ['edit', 'styleChange'],
            items: [
                {
                    title: 'Floor cool cinders',
                    description: 'Thunder fulfilled travellers folly, wading, lake.',
                    dueDate: '2015-01-31'
                }
            ]
        },
        {
            title: 'Disabled custom checkboxes',
            defaultStyle: 'lobilist-danger',
            controls: ['edit', 'add', 'remove'],
            useLobicheck: false,
            items: [
                {
                    title: 'Periods pride',
                    description: 'Accepted was mollis',
                    done: true
                }
            ]
        },
        {
            title: 'Controls disabled',
            controls: false,
            items: [
                {
                    title: 'Composed trays',
                    description: 'Hoary rattle exulting suspendisse elit paradises craft wistful. ' +
                    'Bayonets allures prefer traits wrongs flushed. Tent wily matched bold polite slab coinage ' +
                    'celerities gales beams.'
                }
            ]
        },
        {
            title: 'Disabled todo edit/remove',
            enableTodoRemove: false,
            enableTodoEdit: false,
            items: [
                {
                    title: 'Composed trays',
                    description: 'Hoary rattle exulting suspendisse elit paradises craft wistful. ' +
                    'Bayonets allures prefer traits wrongs flushed. Tent wily matched bold polite slab coinage ' +
                    'celerities gales beams.'
                }
            ]
        }
    ]


   });
<<<<<<< HEAD
 
=======

>>>>>>> f00d4da9303321e3dc4ab3be7e3776dd4df9d6a1
  $('#lobilist-demo-04').lobiList({
  sortable: false,
    lists: [
        {
            title: 'TODO',
            defaultStyle: 'lobilist-info',
            controls: ['edit', 'styleChange'],
            items: [
                {
                    title: 'Floor cool cinders',
                    description: 'Thunder fulfilled travellers folly, wading, lake.',
                    dueDate: '2015-01-31'
                }
            ]
        },
        {
            title: 'Controls disabled',
            controls: false,
            items: [
                {
                    title: 'Composed trays',
                    description: 'Hoary rattle exulting suspendisse elit paradises craft wistful. Bayonets allures prefer traits wrongs flushed. Tent wily matched bold polite slab coinage celerities gales beams.'
                }
            ]
        }
    ]
   });
 });

<<<<<<< HEAD
 })(jQuery);
=======
 })(jQuery);
>>>>>>> f00d4da9303321e3dc4ab3be7e3776dd4df9d6a1
