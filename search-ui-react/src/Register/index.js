import React, {useState } from "react";
import { useNavigate } from "react-router-dom";
import axios from "axios";
import isEmpty from "validator/lib/isEmpty";
import isEmail from "validator/lib/isEmail";
import { isValidPhoneNumber } from "react-phone-number-input";


import "./style.css";
function Register() {

    const [username, setUsername] = useState('')
    const [password, setPassword] = useState('')
    const [email, setEmail] = useState('')
    const [phonenumber, setPhonenumber] = useState('')
    const [firstname, setFirtname] = useState('')
    const [lastname, setLastname] = useState('')
    const [validationMsg, setValidationMsg] = useState({})
    const [responseMess, setResponseMess] = useState()
    const [response, setResponse] = useState()
    const navigate = useNavigate()

    const onChangeUsername = (event) => {
        const value = event.target.value
        setUsername(value)
    }

    const onChangePassword = (event) => {
        const value = event.target.value
        setPassword(value)
    }
    const onChangeFirstname = (event) => {
        const value = event.target.value
        setFirtname(value)
    }
    const onChangeLastname = (event) => {
        const value = event.target.value
        setLastname(value)
    }
    const onChangeEmail = (event) => {
        const value = event.target.value
        setEmail(value)
    }

    const onChangePhonenumber = (event) => {
        const value = event.target.value
        setPhonenumber(value)
    }

    const validateAll = () => {
        const msg = {}
        if (isEmpty(username)) {
            msg.username = "Please input your username"
        }

        if (isEmpty(password)) {
            msg.password = "Please input your password"
        } else if (password.length < 6) {
            msg.password = "Password must be 6 character"
        }

        if (isEmpty(firstname) || isEmpty(lastname)) {
            msg.fullname = "Please input your first and last name"
        }

        if (isEmpty(email)) {
            msg.email = "Please input your email"
        } else if (!isEmail(email)) {
            msg.email = "Your email is inccorect"
        }

        if (isEmpty(phonenumber)) {
            msg.phonenumber = "Please input your phonenumber"
        } else if (!isValidPhoneNumber(phonenumber)) {
            msg.phonenumber = "Your phone number is not valid"
        }

        setValidationMsg(msg)
        if (Object.keys(msg).length > 0) return false
        return true
    }

    const registerRequest = async () => {
        try {
            const isValid = validateAll()
            if (!isValid) return
            else {
                const response = await axios({
                    method: 'post',
                    url: 'http://127.0.0.1:8081/api/signup',
                    headers: { 'Content-Type': 'application/json' },
                    data: {
                        username: username,
                        password: password,
                        firstname: firstname,
                        lastname: lastname,
                        email: email,
                        phonenumber: phonenumber
                    }
                });
                if (response.data === "Create account success") {
                    setResponseMess("")
                    setResponse("")
                    navigate("/", { replace: true })
                }
                console.log(response.data)
            }
        } catch (error) {
            if (error.response) {
                if (error.response.data === "Error: Username is already taken!") {
                    setResponseMess("Username is already taken!")
                    setResponse("")
                }
                if (error.response.data === "Error: Email is already in use!") {
                    setResponse("Email is already in use!")
                    setResponseMess("")
                }
            }
        }

    }

    return (
        <div className="body-background">
            <div className="container-fluid d-flex justify-content-center align-items-center h-100">

                <div className="card p-3 text-center py-4">
                    <h4>Create account</h4>
                    <div>
                        <span>Already have an account?</span>
                        <a href="/" className="text-decoration-none">Signin</a>
                    </div>

                    <div className="mt-3 px-3">
                        <input className="form-control" onChange={onChangeUsername} placeholder="Username" />
                        <p id="registerForm" className="text-danger">{validationMsg.username || responseMess}</p>
                    </div>

                    <div className="mt-3 px-3">
                        <input className="form-control" type='password' onChange={onChangePassword} placeholder="Password" />
                        <p id="registerForm" className="text-danger">{validationMsg.password}</p>
                    </div>

                    <div className="input-group px-3 mt-3">
                        <input type="text" className="form-control" onChange={onChangeFirstname} placeholder="First Name" />
                        <span></span>
                        <input type="text" className="form-control" onChange={onChangeLastname} placeholder="Last Name" />
                    </div>
                    <p id="registerForm" className="text-danger" style={{ marginLeft: "15px" }}>{validationMsg.fullname}</p>
                    <div className="mt-3 px-3">
                        <input className="form-control" onChange={onChangeEmail} placeholder="E-mail" />
                        <p id="registerForm" className="text-danger">{validationMsg.email || response}</p>
                    </div>

                    <div className="mt-3 px-3">
                        <input className="form-control" onChange={onChangePhonenumber} placeholder="Phone (+84)" />
                        <p id="registerForm" className="text-danger">{validationMsg.phonenumber}</p>
                    </div>

                    <div className="mt-3 d-grid px-3">
                        <button className="btn btn-primary btn-block text-uppercase" onClick={registerRequest}>Signup</button>
                    </div>

                </div>
            </div>
        </div>
    );
}

export default Register