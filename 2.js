username("arkademy")
password("29@PASS")
function username(username)
{
	const pattern = new RegExp("^[a-z]{5,5}")
    console.log(pattern.test(username))
}
function password(password)
{
	const pattern = new RegExp("^[0-9]{2,2}[&@][A-Z]{4,4}?$")
    console.log(pattern.test(password))
}
