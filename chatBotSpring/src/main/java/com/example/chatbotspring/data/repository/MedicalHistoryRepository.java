package com.example.chatbotspring.data.repository;

import com.example.chatbotspring.data.entities.MedicalHistory;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import java.util.List;

public interface MedicalHistoryRepository extends JpaRepository<MedicalHistory, Long> {
    @Query(value = "SELECT m from MedicalHistory m where m.username = ?1")
    List<MedicalHistory> findAllByUsername(String username);
    @Override
    void deleteById(Long aLong);

}