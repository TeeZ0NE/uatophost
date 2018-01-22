## adding files to libs
- "autoload": {
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "psr-4": {
            "App\\": "app/"
        },
       "files": [
            "app/libs/prices.php"
        ]
    },
- composer dump-autoload

## using url_slug
`<li><a href="{{ url("hosters/".url_slug($hoster->name, ["transliterate"=>true])) }}">{{ $hoster->name }}</a></li>`

Post::with(array('user'=>function($query){
        $query->select('id','username');
    }))->get();

    DB::table('locations')->where('hoster_id',1)->update(['location'=>'{"ru":["Moscow"],"ua":["Kharkiv"]}'])
    DB::table('locations')->insert(['hoster_id'=>2,'location'=>'{"ua":["Vinnitsa","Rovno"]}'])