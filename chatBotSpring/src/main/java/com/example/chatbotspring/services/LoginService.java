package com.example.chatbotspring.services;

import com.example.chatbotspring.data.entities.UserAccount;
import com.example.chatbotspring.data.repository.UserAccountRepository;
import lombok.AllArgsConstructor;
import org.springframework.stereotype.Service;

@Service
@AllArgsConstructor
public class LoginService {

    private UserAccountRepository userAccountRepository;

    public UserAccount loginCheck(String user, String pass) {
        System.out.println("đã đến đây");
        return getInfo(user, pass);
    }
    private UserAccount getInfo(String user, String pass){
        UserAccount userAccount = userAccountRepository.getUserAccountByUsernameAndPassword(user, pass);
        userAccount.setPassword("");
        return userAccount;
    }
}
