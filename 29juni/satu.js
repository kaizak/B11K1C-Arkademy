var j = {
    "name": "ahmad zaki", //(String)
    "age": 21, //(Number)
    "address": "jln pogung kidul DIY", //(String)
    "hobbies": "fun with java", //(Array)
    "is_married": false, //(Boolean)
    "list_school": {
        "school": "SMAN 1 Bukittinggi",
        "year": "2013-2016",
        "major": null
    }, //(Array of Object) with key name,year_in, year_out, and major(if any,if no set“ null”)

    "Skill": {
        "java": "beginner",
        "css": "beginner",
        "php": "beginner",
        "python": "beginner"
    }, //skills(Array of Obj) with key skill_name and level(beginner, advanced, expert)
    "interest_in_coding": {
        'react native': 'nodejs'
    } //interest_in_coding(Boolean)
};
JSON.stringify(j)