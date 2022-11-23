class Complex {
    a;
    b;

    constructor(a, b) {
        this.a = a;
        this.b - b;    
    }

    toString() {
        if (this.b >= 0) {
            return this.a + '+' + this.b + 'i';
        } else {
            return this.a + this.b + 'i';
        }
    }
}