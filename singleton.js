class singleton{
    
    constructor() {
        if (!Singleton.intance){
            Singleton.instance = new Planet();
            
        }
    }
    
    getInstance(){
        return Singleton.instance;
    }
}

module.exports = Singleton;