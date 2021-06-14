<template>
    <div class="card category_card_dropdown">
        <div class="card-body" v-html="category_html">
            <!-- <ul>
                <li v-for="(category,index) in categories" :key="index">
                    <div class="element">
                        <input type="checkbox" class="form-control">
                        <i class="fa fa-folder"></i>
                        <div>{{category.name}}</div>
                    </div>

                    <ul>
                        <li>
                            <div class="element">
                                <input type="checkbox" class="form-control">
                                <i class="fa fa-folder"></i>
                                <div>asdf</div>
                            </div>

                            <ul>
                                <li>
                                    <div class="element">
                                        <input type="checkbox" class="form-control">
                                        <i class="fa fa-folder"></i>
                                        <div>Shop All</div>
                                        <div class="parent_element_trigger">
                                            <i class="fa fa-plus d-none"></i>
                                            <i class="fa fa-minus d-block"></i>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>
                                            <div class="element">
                                                <input type="checkbox" class="form-control">
                                                <i class="fa fa-folder"></i>
                                                <div>Shop All</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="element">
                                                <input type="checkbox" class="form-control">
                                                <i class="fa fa-folder"></i>
                                                <div>Shop All</div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="element">
                                        <input type="checkbox" class="form-control">
                                        <i class="fa fa-folder"></i>
                                        <div>Shop All</div>
                                        <div class="parent_element_trigger">
                                            <i class="fa fa-plus d-block"></i>
                                            <i class="fa fa-minus d-none"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="element">
                                        <input type="checkbox" class="form-control">
                                        <i class="fa fa-folder"></i>
                                        <div>Shop All</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="element">
                                        <input type="checkbox" class="form-control">
                                        <i class="fa fa-folder"></i>
                                        <div>Shop All</div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul> -->
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            categories: [
                {
                    name: 'men',
                    child: [
                        {
                            name: 't-shirt'
                        },
                        {
                            name: 'pant',
                            child: [
                                {name: 'gavatin'},
                                {name: 'jeans'},
                                {
                                    name: 'touser',
                                    child: [
                                        {name: 'sm'},
                                        {name: 'md'},
                                        {name: 'lg'},
                                    ]
                                },
                            ]
                        },
                    ]
                },
                {
                    name: 'women',
                    child: [
                        {
                            name: 'saari'
                        },
                        {
                            name: 'kamis',
                            child: [
                                {name: '3 peice'},
                                {name: '1 peice'},
                                {
                                    name: 'legenga',
                                    child: [
                                        {name: 'sm'},
                                        {name: 'md'},
                                        {name: 'lg'},
                                    ]
                                },
                            ]
                        },
                    ]
                },
                {
                    name: 'child',
                    child: [
                        {
                            name: 'toys'
                        },
                        {
                            name: 'suits',
                            child: [
                                {name: 'one time'},
                                {name: 'costly'},
                                {
                                    name: 'foreign',
                                    child: [
                                        {name: 'sm'},
                                        {name: 'md'},
                                        {name: 'lg'},
                                    ]
                                },
                            ]
                        },
                    ]
                },
                {
                    name: 'electronics',
                }
            ],
            depth_value: [],
            depth_value_index: 1,
            category_html: '',
        }
    },
    created: function(){
        this.array_depth(this.categories);
    },
    methods: {
        array_depth: function(arr){
            // console.log(arr);
            // let depth_value_index = 0;
            this.category_html += '<ul>';
            for (let index = 0; index < arr.length; index++) {
                const element = arr[index];
                this.category_html += '<li>';
                this.category_html += `
                    <div class="element">
                        <input type="checkbox" class="form-control">
                        <i class="fa fa-folder"></i>
                        <div>${element.name}</div>
                `;
                if (element.child !== undefined) {
                    this.category_html += `<div class="parent_element_trigger">
                                                <i class="fa fa-plus d-none"></i>
                                                <i class="fa fa-minus d-block"></i>
                                            </div>`;
                }

                this.category_html += `</div>`;

                if (element.child !== undefined) {
                    // console.log(element);
                    // this.depth_value.push(this.depth_value_index++);
                    // console.log(element.name,this.depth_value_index++);
                    this.array_depth(element.child);
                }

                this.category_html += '</li>';
            }

            this.category_html += '</ul>';

            // console.log('count '+this.depth_value_index, this.depth_value, this.category_html);

            console.log(this.category_html);
        }
    }
}
</script>

<style>

</style>
