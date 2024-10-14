export default {
    getBooleanValue(key)
    {   
        const value = localStorage.getItem(key);
        if(value == null)
            return true;

        return value == "true";
    },
    setValue(key, value)
    {
        localStorage.setItem(key, value);
    }
}