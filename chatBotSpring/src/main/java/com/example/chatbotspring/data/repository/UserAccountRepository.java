package com.example.chatbotspring.data.repository;

import com.example.chatbotspring.data.entities.UserAccount;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;

public interface UserAccountRepository extends JpaRepository<UserAccount, Long> {

    UserAccount getUserAccountByUsernameAndPassword(String username, String password);

    Boolean existsByUsername(String username);

    Boolean findByUsername(String username);

    Boolean findByPassword(String password);

    Boolean existsByEmail(String email);


}